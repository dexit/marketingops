<?php

namespace ProfilePress\Libsodium\MailchimpIntegration\Admin;

use ProfilePress\Core\Admin\SettingsPages\AbstractSettingsPage;
use ProfilePress\Core\Classes\FormRepository;
use ProfilePress\Core\Classes\PROFILEPRESS_sql;
use ProfilePress\Custom_Settings_Page_Api;
use ProfilePress\Libsodium\MailchimpIntegration\Init;
use ProfilePress\Libsodium\Traits;

class SettingsPage
{
    use Traits;

    public $audience_list_table;

    public function __construct()
    {
        add_action('ppress_register_menu_page_integrations_mailchimp', function () {

            add_action('wp_cspa_field_before_text_field', array($this, 'api_key_status_notice'));

            add_action('ppress_settings_page_screen_option', [$this, 'screen_option']);

            add_action('wp_cspa_before_closing_header', [$this, 'add_new_button']);

            add_filter('ppress_general_settings_admin_page_title', function () {
                return esc_html__('Mailchimp', 'profilepress-pro');
            });

            add_action('admin_init', [$this, 'save_audience'], 10, 2);
        });

        add_action('ppress_admin_settings_submenu_page_integrations_mailchimp', [$this, 'admin_page']);

        add_filter('ppress_integrations_submenu_tabs', [$this, 'add_menu_tab']);

        add_action('wp_cspa_after_persist_settings', function () {
            delete_transient('ppress_mc_get_email_list');
        });

        add_filter('wp_cspa_success_notice', function ($text, $option_name) {

            if ($option_name == 'pp_mc_save_audience') {
                $text = esc_html__('Update successful.', 'profilepress-pro');
            }

            return $text;
        }, 10, 2);

        add_action('ppress_drag_drop_builder_field_init_after', function ($form_type) {
            if (FormRepository::REGISTRATION_TYPE == $form_type) {
                add_filter('ppress_form_builder_fields_multiple_addition', function ($values) {
                    $values[] = 'pp-mailchimp';

                    return $values;
                });
                new MailchimpField();
            }
        });

        add_filter('ppress_melange_available_shortcodes', [$this, 'add_available_shortcode_popup'], 10);

        add_filter('ppress_reg_edit_profile_available_shortcodes', function ($shortcodes, $type) {

            if ('reg' == $type) $shortcodes = $this->add_available_shortcode_popup($shortcodes);

            return $shortcodes;
        }, 10, 2);
    }

    public function add_available_shortcode_popup($shortcodes)
    {
        $shortcodes['pp-mailchimp'] = [
            'description' => esc_html__('Allow users select Mailchimp audience to subscribe to', 'profilepress-pro'),
            'shortcode'   => 'pp-mailchimp',
            'attributes'  => [
                'audience_id'   => [
                    'label'   => esc_html__('Select Audience', 'profilepress-pro'),
                    'field'   => 'select',
                    'options' => self::audience_select_options()
                ],
                'checkbox_text' => [
                    'label'       => esc_html__('Checkbox Text', 'profilepress-pro'),
                    'field'       => 'text',
                    'placeholder' => esc_html__('Defaults to the audience title if empty', 'profilepress-pro'),
                    'description' => esc_html__('Text that is shown beside the checkbox. Defaults to the audience title if empty.', 'profilepress-pro'),
                ],
                'checked'       => [
                    'label'   => esc_html__('Checked by Default', 'profilepress-pro'),
                    'options' => [
                        'false' => esc_html__('False', 'profilepress-pro'),
                        'true'  => esc_html__('True', 'profilepress-pro'),
                    ],
                    'field'   => 'select',
                ]
            ]
        ];

        return $shortcodes;
    }

    public function add_menu_tab($tabs)
    {
        $tabs[45] = ['parent' => 'integrations', 'id' => 'mailchimp', 'label' => esc_html__('Mailchimp', 'profilepress-pro')];

        return $tabs;
    }

    public function screen_option()
    {
        $this->audience_list_table = new WPListTable();
    }

    public function save_audience()
    {
        if ( ! isset($_POST['pp_mc_save_audience'])) return;

        if ( ! isset($_GET['mc-audience'])) return;

        $sanitized_data = Custom_Settings_Page_Api::sanitize_data($_POST['pp_mc_save_audience']);

        if (empty($sanitized_data['mc_audience_title'])) {
            $sanitized_data['mc_audience_title'] = Init::get_mc_audience_data($sanitized_data['mc_audience_select'], 'name');
        }

        if ($_GET['mc-audience'] == 'add') {
            $id = PROFILEPRESS_sql::add_meta_data('mc_audience', $sanitized_data);

            wp_safe_redirect(add_query_arg('settings-updated', 'true', self::edit_audience_url($id)));
            exit;
        }

        if ($_GET['mc-audience'] == 'edit' && ! empty($_GET['id'])) {
            $id = absint($_GET['id']);
            PROFILEPRESS_sql::update_meta_value($id, 'mc_audience', $sanitized_data);
            wp_safe_redirect(add_query_arg('settings-updated', 'true', self::edit_audience_url($id)));
            exit;
        }
    }

    public static function audience_select_options()
    {
        $audiences = PROFILEPRESS_sql::get_meta_data_by_key('mc_audience');

        $audiences = ! is_array($audiences) ? [] : $audiences;

        return array_reduce($audiences, function ($carry, $item) {
            if (isset($item['meta_value']['mc_audience_enable']) && $item['meta_value']['mc_audience_enable'] == 'true') {
                $audience_id = $item['id'];

                if ( ! Init::is_automatic_add_user_audience($audience_id)) {
                    $carry[$audience_id] = $item['meta_value']['mc_audience_title'];
                }
            }

            return $carry;
        }, [0 => esc_html__('Select...', 'profilepress-pro')]);
    }

    public static function settings_page_url()
    {
        return add_query_arg(['view' => 'integrations', 'section' => 'mailchimp'], PPRESS_SETTINGS_SETTING_PAGE);
    }

    public static function add_new_audience_url()
    {
        return add_query_arg('mc-audience', 'add', self::settings_page_url());
    }

    public static function edit_audience_url($audience_id)
    {
        return add_query_arg(['mc-audience' => 'edit', 'id' => $audience_id], self::settings_page_url());
    }

    public static function delete_audience_url($audience_id)
    {
        return wp_nonce_url(add_query_arg(['action' => 'delete', 'mc-audience-id' => $audience_id], self::settings_page_url()), 'ppress_mc_delete_audience');
    }

    public function add_new_button()
    {
        if ( ! isset($_GET['mc-audience'])) {
            $url = self::add_new_audience_url();
            echo "<a class=\"add-new-h2\" href=\"$url\">" . esc_html__('Add New Audience', 'profilepress-pro') . '</a>';
        }
    }

    /**
     * Display error if API Key is invalid
     *
     * @param string $id
     */
    public function api_key_status_notice($id)
    {
        if ($id != 'mc_api_key') return;

        if (empty(ppress_settings_by_key($id))) return;

        $status = Init::is_api_key_valid();

        if ( ! $status) {
            $class  = 'ppress-below-text-field-error';
            $notice = esc_html__('The key you entered is invalid. Please double-check it.', 'profilepress-pro');
        } else {
            $class  = 'pp-below-text-field-success';
            $notice = esc_html__('API key successfully validated.', 'profilepress-pro');
        }

        echo '<div class="' . $class . '" style="max-width:630px">';
        echo $notice;
        echo '</div>';
    }

    public function admin_page()
    {
        if ( ! isset($_GET['mc-audience'])) {
            add_filter('wp_cspa_main_content_area', function ($content_area) {
                ob_start();
                $this->audience_list_table->prepare_items();
                $this->audience_list_table->display();

                return ob_get_clean() . $content_area;
            });
        }

        $page_header = esc_html__('Mailchimp', 'profilepress-pro');
        $instance    = Custom_Settings_Page_Api::instance();

        if (isset($_GET['mc-audience'])) {
            add_filter('wp_cspa_disable_default_persistence', '__return_true');

            $settings_args = $this->mc_audience_settings();
            $instance->option_name('pp_mc_save_audience');

            if ($_GET['mc-audience'] == 'edit' && ! empty($_GET['id'])) {
                $data = PROFILEPRESS_sql::get_meta_value(absint($_GET['id']), 'mc_audience');
                if ( ! $data) $data = [];
                $instance->set_db_options($data);
            }

        } else {
            $settings_args = $this->mailchimp_settings();

            $instance->option_name(PPRESS_SETTINGS_DB_OPTION_NAME);
        }

        $instance->page_header($page_header);
        $instance->main_content($settings_args);
        $instance->remove_white_design();
        $instance->header_without_frills();
        $instance->build(true);
    }

    public function mailchimp_settings()
    {
        $args = [
            'mc_api_key'                 => [
                'type'          => 'text',
                'obfuscate_val' => true,
                'label'         => __('API Key', 'profilepress-pro'),
                'description'   => sprintf(__('Your Mailchimp account API key. Get it %shere%s.', 'profilepress-pro'), '<a target="_blank" href="https://admin.mailchimp.com/account/api/">', '</a>')
            ],
            'mc_checkout_checkbox'       => [
                'type'           => 'checkbox',
                'checkbox_label' => esc_html__('Enable', 'profilepress-pro'),
                'label'          => __('Checkout Subscription Checkbox', 'profilepress-pro'),
                'description'    => esc_html__('Enable to add a subscription checkbox to the checkout form. Only users that opted in will be added to the Mailchimp audience of the membership plan they purchase.', 'profilepress-pro')
            ],
            'mc_checkout_checkbox_label' => [
                'type'  => 'text',
                'label' => __('Checkout Checkbox Label', 'profilepress-pro'),
                'value' => esc_html__('Subscribe to our newsletter', 'profilepress-pro'),
            ],
            'mc_auto_sync'               => [
                'type'        => 'checkbox',
                'label'       => __('Enable Auto-sync', 'profilepress-pro'),
                'description' => sprintf(
                    esc_html__("If enabled, the plugin will listen to changes in your WordPress user base and membership subscriptions and automatically sync them with Mailchimp. For example, if a user changes their name on your website, it will be updated in Mailchimp. Also, if their subscription to a membership expires, they will be removed from the plan's Mailchimp audience. %sLearn more%s", 'profilepress-pro'),
                    '<a target="_blank" href="https://profilepress.com/article/mailchimp-setup/">', '</a>'
                )
            ],
            'mc_sync_now'                => array(
                'type'        => 'hidden',
                'label'       => __('Sync Tool', 'profilepress-pro'),
                'description' => sprintf(
                    '<input id="ppesp_sync_tool_btn" class="button-secondary" type="button" value="%s"><p class="description">%s</p>%s',
                    esc_html__('Click to Open Sync Tool', 'profilepress-pro'),
                    esc_html__('Use this tool to bulk import users into a Mailchimp audience.', 'profilepress-pro'),
                    $this->sync_tool_html('mailchimp', self::audience_select_options())
                )
            )
        ];

        return [$args];
    }

    public function saved_db_data($field = '')
    {
        $db_data = false;

        if (isset($_GET['id'])) {

            $db_data = PROFILEPRESS_sql::get_meta_value(absint($_GET['id']), 'mc_audience');

            if ( ! $db_data) $db_data = [];

            $db_data = ppress_var($db_data, $field);
        }

        return $db_data;
    }

    public function field_mapping_view($list_id)
    {
        $mapped_custom_fields = $this->saved_db_data('mc_audience_fields_map');

        if ( ! $mapped_custom_fields) $mapped_custom_fields = [];

        $custom_fields = ['' => esc_html__('Select...', 'profilepress-pro')];

        $list_fields = Init::get_list_merge_fields($list_id);

        $pp_custom_fields = PROFILEPRESS_sql::get_profile_custom_fields();

        $pp_contact_info = PROFILEPRESS_sql::get_contact_info_fields();

        foreach ($pp_contact_info as $key => $label) {
            $custom_fields[$key] = $label;
        }

        foreach ($pp_custom_fields as $field) {
            $custom_fields[$field['field_key']] = $field['label_name'];
        }

        $core_fields = [
            'user_login'   => esc_html__('Username', 'profilepress-pro'),
            'first_name'   => esc_html__('First Name', 'profilepress-pro'),
            'last_name'    => esc_html__('Last Name', 'profilepress-pro'),
            'user_url'     => esc_html__('Website', 'profilepress-pro'),
            'nickname'     => esc_html__('Nickname', 'profilepress-pro'),
            'display_name' => esc_html__('Display Name', 'profilepress-pro'),
            'description'  => esc_html__('Biography', 'profilepress-pro'),
        ];

        ob_start();
        ?>
        <table class="form-table" cellspacing="0" style="margin-top:0;">
            <tbody>
            <?php foreach ($list_fields as $key => $value): ?>
                <tr>
                    <td scope="row" style="width: 200px;">
                        <label for="mccf_<?= $key ?>"><?= $value ?></label></td>
                    <td>
                        <select name="pp_mc_save_audience[mc_audience_fields_map][<?= $key ?>]" id="mccf_<?= $key ?>" style="width: 28.5em !important;">
                            <optgroup label="<?= esc_html__('Standard Fields', 'profilepress-pro') ?>">
                                <?php foreach ($core_fields as $stan_key => $stan_value): ?>
                                    <option value="<?= esc_attr($stan_key) ?>" <?= selected($stan_key, ppress_var($mapped_custom_fields, $key), false) ?>><?= $stan_value ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="<?= esc_html__('Custom Fields', 'profilepress-pro') ?>">
                                <?php foreach ($custom_fields as $cf_key => $cf_value): ?>
                                    <option value="<?= esc_attr($cf_key) ?>" <?= selected($cf_key, ppress_var($mapped_custom_fields, $key), false) ?>>
                                        <?= ppress_woocommerce_field_transform($cf_key, $cf_value) ?>
                                    </option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php

        return ob_get_clean();
    }

    public function mc_audience_settings()
    {
        $tag_options = $list_options = [];

        $lists = Init::get_email_list();

        if (is_array($lists) && ! empty($lists)) {
            $list_options = array_reduce($lists, function ($carry, $item) {
                $carry[$item['id']] = $item['name'];

                return $carry;
            }, []);
        }

        $list_id = $this->saved_db_data('mc_audience_select');

        if ( ! $list_id) $list_id = ppress_var(array_keys($list_options), 0, '');

        if ( ! empty($list_id)) {
            $tag_options = Init::get_list_tags($list_id);
        }

        $settings = [
            'mc_audience_enable'             => [
                'type'           => 'checkbox',
                'label'          => esc_html__('Enable Audience', 'profilepress-pro'),
                'checkbox_label' => esc_html__('Enable', 'profilepress-pro'),
                'description'    => esc_html__('Turn on to make this audience or list available for users to subscribe to and unsubscribe from.', 'profilepress-pro')
            ],
            'mc_audience_title'              => [
                'label'       => esc_html__('Title', 'profilepress-pro'),
                'description' => esc_html__('Text is shown on the Registration Form and My Account pages to represent this audience. Preferably, the selected audience name.', 'profilepress-pro'),
                'type'        => 'text'
            ],
            'mc_audience_select'             => [
                'type'       => 'select',
                'options'    => $list_options,
                'label'      => esc_html__('Select Audience', 'profilepress-pro'),
                'attributes' => ['onchange' => "jQuery(this).parents('form').find('.button-primary').click();"]
            ],
            'mc_audience_automatic_add_user' => [
                'type'           => 'checkbox',
                'label'          => esc_html__('Automatically Add New Users', 'profilepress-pro'),
                'checkbox_label' => esc_html__('Enable', 'profilepress-pro'),
                'description'    => esc_html__('If enabled, users will automatically be subscribed to this audience when they register and the audience will not show on a registration form even if you add Mailchimp field to the form.', 'profilepress-pro')
            ],
            'mc_audience_field_map'          => [
                'type'  => 'custom_field_block',
                'data'  => $this->field_mapping_view($list_id),
                'label' => esc_html__('Map Fields', 'profilepress-pro')
            ],
            'mc_audience_double_optin'       => [
                'type'           => 'checkbox',
                'label'          => esc_html__('Double Optin', 'profilepress-pro'),
                'checkbox_label' => esc_html__('Enable', 'profilepress-pro'),
                'description'    => esc_html__('If enabled, users will receive an opt-in confirmation email before they are added to this audience.', 'profilepress-pro')
            ],
            'mc_audience_default_tags'       => [
                'type'        => 'select2',
                'options'     => $tag_options,
                'label'       => esc_html__('Default Tags', 'profilepress-pro'),
                'description' => esc_html__('Select tags to apply to users that subscribe to this audience.', 'profilepress-pro')
            ],
        ];

        return [$settings];
    }

    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}
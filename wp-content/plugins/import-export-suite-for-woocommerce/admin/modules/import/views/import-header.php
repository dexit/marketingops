<?php
/**
 * Import header page
 *
 * @package ImportExportSuite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wt-iew-settings-header">
	<h3>
		<?php esc_html_e( 'Import' ); ?>
						  <?php
							if ( 'post_type' != $this->step ) {
								?>
			 <span class="wt_iew_step_head_post_type_name"></span>
								<?php
							}
							?>
		: <?php echo esc_html( $this->step_title ); ?>
	</h3>
	<span class="wt_iew_step_info" title="<?php echo esc_html( $this->step_summary ); ?>">
		<?php
		// step count summary.
		echo esc_html( $this->step_summary );
		?>
	</span>
</div>

<?php
/**
 * Conference vault listing template.
 *
 * This template can be overridden by copying it to activetheme/marketing-ops-core/conference-vault/conference-vault-main.php
 *
 * @see         https://marketingops.com/
 * @author      Adarsh Verma
 * @package     Marketing_Ops_Core
 * @category    Template
 * @since       1.0.0
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$pillars      = get_terms( // Get the pillars.
	array(
		'taxonomy'   => 'pillar',
		'hide_empty' => true,
	)
);
$conferences  = get_terms( // Get the conferences.
	array(
		'taxonomy'   => 'conference',
		'hide_empty' => true,
	)
);
$skill_levels = get_terms( // Get the skill levels.
	array(
		'taxonomy'   => 'conference_skill_level',
		'hide_empty' => true,
	)
);
$page_id      = get_the_ID();

// Get the terms from which the videos should be shown.
$terms_from_pillar      = get_field( 'select_pillar', "page_{$page_id}" );
$terms_from_conference  = get_field( 'select_conference', "page_{$page_id}" );
$terms_from_skill_level = get_field( 'select_skill_level', "page_{$page_id}" );

debug( get_the_ID() );
debug( $terms_from_pillar );
debug( $terms_from_conference );
debug( $terms_from_skill_level );
?>
<section class="marketingopstemplatesconfernace conferencevault elementor-section elementor-section-boxed">
	<div class="margktingimgss"></div>
	<div class="elementor-container elementor-column-gap-default">
		<div class="conferencevaultinner">
			<h1><?php esc_html_e( 'Conference Vault', 'marketing-ops-core' ); ?></h1>
			<h3><?php esc_html_e( 'MarketingOps event speakers\' presentations archive from 2018 to present day. Enjoy.', 'marketing-ops-core' ); ?></h3>
		</div>
	</div>
	<div class="elementor-container elementor-column-gap-default">
		<div class="conferencevaultinner_inner">
			<div class="conferencevaultinner_innerleft">
				<div class="elementor-shortcode">
					<?php if ( ! empty( $pillars ) && is_array( $pillars ) ) { ?>
						<!-- PILLARS -->
						<div class="common_filter_row">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="directory_search_form">
									<div class="expandableCollapsibleDiv platform_section">
										<h3 class="open"><?php esc_html_e( 'Pillar', 'marketing-ops-core' ); ?></h3>
										<ul class="moc_training_filters">
											<?php foreach ( $pillars as $pillar ) { ?>
												<li>
													<input id="<?php echo esc_attr( $pillar->slug ); ?>" type="checkbox" name="<?php echo esc_attr( $pillar->taxonomy ); ?>" value="<?php echo esc_attr( $pillar->term_id ); ?>">
													<label for="<?php echo esc_attr( $pillar->slug ); ?>"><?php echo esc_html( $pillar->name ); ?></label>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<?php if ( ! empty( $conferences ) && is_array( $conferences ) ) { ?>
						<!-- CONFERENCES -->
						<div class="common_filter_row">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="directory_search_form">
									<div class="expandableCollapsibleDiv platform_section">
										<h3 class="open"><?php esc_html_e( 'Conference', 'marketing-ops-core' ); ?></h3>
										<ul class="moc_training_filters">
											<?php foreach ( $conferences as $conference ) { ?>
												<li>
													<input id="<?php echo esc_attr( $conference->slug ); ?>" type="checkbox" name="<?php echo esc_attr( $conference->taxonomy ); ?>" value="<?php echo esc_attr( $conference->term_id ); ?>">
													<label for="<?php echo esc_attr( $conference->slug ); ?>"><?php echo esc_html( $conference->name ); ?></label>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					
					<?php if ( ! empty( $skill_levels ) && is_array( $skill_levels ) ) { ?>
						<!-- SKILL LEVELS -->
						<div class="common_filter_row">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="directory_search_form">
									<div class="expandableCollapsibleDiv platform_section">
										<h3 class="open"><?php esc_html_e( 'Skill Level', 'marketing-ops-core' ); ?></h3>
										<ul class="moc_training_filters">
											<?php foreach ( $skill_levels as $skill_level ) { ?>
												<li>
													<input id="<?php echo esc_attr( $skill_level->slug ); ?>" type="checkbox" name="<?php echo esc_attr( $skill_level->taxonomy ); ?>" value="<?php echo esc_attr( $skill_level->term_id ); ?>">
													<label for="<?php echo esc_attr( $skill_level->slug ); ?>"><?php echo esc_html( $skill_level->name ); ?></label>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="common_filter_row">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="directory_search_form mainsidbarsearch">
								<div class="platform_section">
									<h3 class="open">Search</h3>
									<div class="moc_input_field">
										<input type="text" id="search_keywords" name="search_keywords" placeholder="" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="conferencevaultinner_innerright">
				<div class="conferencevaultinner_innerright_inner this_should_repeat">
					<h2>Mops-A-palooza 2023</h2>
					<p>83 Sessions</p>
					<ul>
						<li>
							<div class="conferencevaultinnergridboximage">
								<div class="innerimagebox">
									<img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868.jpg" />
								</div>
								<div class="innerimageboxdescriptions">
									<h4>Unveiling the New Pillars</h4>
									<small>by Darrell Alfonso</small>
									<p>Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra. </p>
								</div>
							</div>
						</li>
						<li>
							<div class="conferencevaultinnergridboximage">
								<div class="conferencevaultinnergridboximageshowmore">
									<a href="javascript:void(0);">
										Show this event
										<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none"><g clip-path="url(#clip0_26_82)"><path d="M10.5262 3.99457C10.2892 3.98546 10.0693 4.12103 9.97249 4.3375C9.87452 4.55396 9.91667 4.80688 10.0807 4.98005L11.8728 6.91682H0.592831C0.382065 6.9134 0.187248 7.02391 0.0812957 7.20619C-0.0257965 7.38734 -0.0257965 7.61292 0.0812957 7.79406C0.187248 7.97634 0.382065 8.08685 0.592831 8.08344H11.8728L10.0807 10.0202C9.9349 10.1729 9.88363 10.3916 9.94515 10.5933C10.0067 10.7949 10.1719 10.9476 10.3769 10.9931C10.5831 11.0387 10.7973 10.9692 10.9375 10.8131L14.001 7.50013L10.9375 4.18711C10.8326 4.0709 10.6834 4.00027 10.5262 3.99457Z" fill="#242730"/></g><defs><clipPath id="clip0_26_82"><rect width="15" height="11" fill="white"/></clipPath></defs></svg></i>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="confernceloadmore">
					<div class="confernceloadmoreinner">
						<button type="button"><?php esc_html_e( 'Load More', 'marketing-ops-core' ); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();

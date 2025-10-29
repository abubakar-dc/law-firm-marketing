<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

list( $lmf_var_post_id, $lmf_fields, $lmf_option_fields ) = LawFirmMarketing::defaults();
// Default Footer Options.
$lmf_var_footer_scripts = $lmf_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$lmf_var_schema_check = $lmf_option_fields['lmf_var_schema_check'] ?? null;
if ( $lmf_var_schema_check ) {
	$lmf_var_schema_business_name       = $lmf_option_fields['lmf_var_schema_business_name'] ?? null;
	$lmf_var_schema_business_legal_name = $lmf_option_fields['lmf_var_schema_business_legal_name'] ?? null;
	$lmf_var_schema_street_address      = $lmf_option_fields['lmf_var_schema_street_address'] ?? null;
	$lmf_var_schema_locality            = $lmf_option_fields['lmf_var_schema_locality'] ?? null;
	$lmf_var_schema_region              = $lmf_option_fields['lmf_var_schema_region'] ?? null;
	$lmf_var_schema_postal_code         = $lmf_option_fields['lmf_var_schema_postal_code'] ?? null;
	$lmf_var_schema_map_short_link      = $lmf_option_fields['lmf_var_schema_map_short_link'] ?? null;
	$lmf_var_schema_latitude            = $lmf_option_fields['lmf_var_schema_latitude'] ?? null;
	$lmf_var_schema_longitude           = $lmf_option_fields['lmf_var_schema_longitude'] ?? null;
	$lmf_var_schema_opening_hours       = $lmf_option_fields['lmf_var_schema_opening_hours'] ?? null;
	$lmf_var_schema_telephone           = $lmf_option_fields['lmf_var_schema_telephone'] ?? null;
	$lmf_var_schema_business_email      = $lmf_option_fields['lmf_var_schema_business_email'] ?? null;
	$lmf_var_schema_business_logo       = $lmf_option_fields['lmf_var_schema_business_logo'] ?? null;
	$lmf_var_schema_price_range         = $lmf_option_fields['lmf_var_schema_price_range'] ?? null;
	$lmf_var_schema_type                = $lmf_option_fields['lmf_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$lmf_var_ftrop_title     = $lmf_option_fields['lmf_var_ftrop_title'] ?? null;
$lmf_var_ftrop_text      = $lmf_option_fields['lmf_var_ftrop_text'] ?? null;
$lmf_var_ftrop_copyright = $lmf_option_fields['lmf_var_ftrop_copyright'] ?? null;
$lmf_var_social_profiles = $lmf_option_fields['lmf_var_social_profiles'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="footer-ctn">
		<div class="wrapper">

			<div class="footer-widgets d-flex justify-content-between flex-wrap">
				<div class="single-widget">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo-white.svg"
								alt="Logo" />
						</a>
					</div>
					<?php if ( $lmf_var_ftrop_title ) { ?>
					<h5><?php echo html_entity_decode( $lmf_var_ftrop_title ); ?></h5>
					<?php } ?>
					<?php if ( $lmf_var_ftrop_text ) { ?>
					<div class="address"><?php echo html_entity_decode( $lmf_var_ftrop_text ); ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php LawFirmMarketing::the_social_icons( $lmf_var_social_profiles ); ?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'LawFirmMarketing::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'LawFirmMarketing::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-three',
									'fallback_cb'    => 'LawFirmMarketing::nav_fallback',
								)
							);
							?>
					</div>
				</div>
			</div>
			<div class="gl-s72"></div>
			<div class="footer-bottom d-flex align-items-center justify-content-between">
				<?php if ( $lmf_var_ftrop_copyright ) { ?>
				<div class="copy-right"><?php echo esc_html( $lmf_var_ftrop_copyright ); ?></div>
				<?php } ?>
				<div class="legal-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'LawFirmMarketing::nav_fallback',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
	<?php
	if ( $lmf_var_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo esc_html( $lmf_var_schema_type ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo esc_html( $lmf_var_schema_locality ); ?>",
			"addressRegion": "<?php echo esc_html( $lmf_var_schema_region ); ?>",
			"postalCode": "<?php echo esc_html( $lmf_var_schema_postal_code ); ?>",
			"streetAddress": "<?php echo esc_html( $lmf_var_schema_street_address ); ?>"
		},
		"hasMap": "<?php echo esc_html( $lmf_var_schema_map_short_link ); ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo esc_html( $lmf_var_schema_latitude ); ?>",
			"longitude": "<?php echo esc_html( $lmf_var_schema_longitude ); ?>"
		},
		"name": "<?php echo esc_html( $lmf_var_schema_business_name ); ?>",
		"openingHours": "<?php echo esc_html( $lmf_var_schema_opening_hours ); ?>",
		"telephone": "<?php echo esc_html( $lmf_var_schema_telephone ); ?>",
		"email": "<?php echo esc_html( $lmf_var_schema_business_email ); ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo esc_html( $lmf_var_schema_business_logo ); ?>",
		"legalName": "<?php echo esc_html( $lmf_var_schema_business_legal_name ); ?>",
		"priceRange": "<?php echo esc_html( $lmf_var_schema_price_range ); ?>"
	}
	</script> <?php } ?>
</footer>
<?php wp_footer(); ?>
<?php
if ( '' !== $lmf_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $lmf_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>

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
</main>

<footer id="footer-section" class="footer-section ctn-1680">
	<div class="footer-ctn">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="footer-widgets d-flex ">
				<div class="footer-widget widget-left">
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
					<div class="footer-logo">
						<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/site-logo.svg" alt="Site Logo" /></a>
					</div>
				</div>
				<div class="footer-widget widget-right">
					<div class="widget-head d-flex align-items-start justify-content-between">
						<div class="text-30">Contact info</div>
						<div class="text-18 right-align">Take your law firm to <br> the next level.</div>
					</div>
					<div class="s-156"></div>
					<div class="widget-row">
						<h5 class="text-24">For general inquires</h5>
						<p>
							<a href="mailto:info@lawmarketing.com">info@lawmarketing.com</a>
						</p>
					</div>
					<div class="s-72"></div>
					<div class="widget-row">
						<h5 class="text-24">Phone no.</h5>
						<p>
							<a href="tel:+92123121111">+92 123 12 1111</a>
						</p>
					</div>
					<div class="s-72"></div>
					<div class="widget-row">
						<h5 class="text-24">Social Media</h5>
						<div class="social-links">
							<a href="https://www.facebook.com/" target="_blank" class="social-link">facebook</a>
							<a href="https://www.instagram.com/" target="_blank" class="social-link"> instagram</a>
							<a href="https://www.linkedin.com/" target="_blank" class="social-link"> linkedin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
	<?php if ( $lmf_var_schema_check ) { ?>
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
		</script>
	<?php } ?>
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

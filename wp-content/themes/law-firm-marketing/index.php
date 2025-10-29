<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

get_header();
	list( $lmf_var_post_id, $lmf_fields, $lmf_option_fields,$lmf_query_object ) = LawFirmMarketing::defaults();

?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<div class="wrapper">
		<div class="<?php LawFirmMarketing::have_post_class( 'three-columns' ); ?>">
			<!-- Content Start -->
			<?php $lmf_query = LawFirmMarketing::query(); ?>
			<div class="ts-80"></div>
			<!-- Content End -->
		</div>
	</div>
</section>
<?php get_footer(); ?>

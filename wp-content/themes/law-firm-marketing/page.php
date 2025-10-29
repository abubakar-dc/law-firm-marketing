<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

// Include header.
get_header();


list( $lmf_var_post_id, $lmf_fields, $lmf_option_fields ) = LawFirmMarketing::defaults();

$lmf_var_tmp_def_title  = $lmf_fields['lmf_var_tmp_def_title'] ?? get_the_title();
$lmf_var_tmp_def_text   = $lmf_fields['lmf_var_tmp_def_text'] ?? null;
$lmf_var_tmp_def_button = $lmf_fields['lmf_var_tmp_def_button'] ?? null;

?>

<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->

	<div class="hero-ctn">
		<div class="wrapper">
			<h1><?php echo html_entity_decode( $lmf_var_tmp_def_title ); ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>

<section id="page-section" class="page-section">
	<!-- Content Start -->
	<?php
		global $wp_query;
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			// Include specific template for the content.
			get_template_part( 'partials/content', 'page' );
		}
		?>
		<?php
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'partials/content', 'none' );
	}
	?>
	<div class="ts-80"></div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>

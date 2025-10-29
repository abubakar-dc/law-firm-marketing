<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

list( $lmf_var_post_id, $lmf_fields, $lmf_option_fields, $lmf_queried_object ) = LawFirmMarketing::defaults();

$lmf_var_to_cta_headline = $lmf_option_fields['lmf_var_to_cta_headline'] ?? null;

$lmf_var_page_cta_pagevisibility = $lmf_fields['lmf_var_page_cta_pagevisibility'] ?? null;
$lmf_var_ftrcta_headline         = $lmf_fields['lmf_var_page_cta_headline'] ?? $lmf_var_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo esc_html( $lmf_var_ftrcta_headline ); ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>

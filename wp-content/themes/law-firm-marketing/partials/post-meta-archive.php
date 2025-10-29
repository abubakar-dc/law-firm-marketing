<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

list($lmf_var_author_avatar,$lmf_var_author_name) = LawFirmMarketing::get_author_data( get_the_ID() );

// Post Tags & Categories.
$lmf_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( LAWFIRMMARKETING_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $lmf_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $lmf_var_post_tag as $lmf_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $lmf_var_category ) ); ?>"><?php echo esc_html( $lmf_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>

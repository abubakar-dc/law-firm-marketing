<?php
/**
 * Block Name: Media Alongside Text
 *
 * The template for displaying the custom gutenberg block named Media Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

LawFirmMarketing::block(
	$block,
	function ( $lmf_block_id, $lmf_block_name, $lmf_block_fields, $lmf_option_fields ) {

		// Block variables.
		$lmf_var_blk_mat_title        = $lmf_block_fields['lmf_var_blk_mat_title'] ?? null;
		$lmf_var_blk_mat_text        = $lmf_block_fields['lmf_var_blk_mat_text'] ?? null;
		$lmf_var_blk_mat_button        = $lmf_block_fields['lmf_var_blk_mat_button'] ?? null;
		$lmf_var_blk_mat_image        = $lmf_block_fields['lmf_var_blk_mat_image'] ?? null;
		$lmf_var_blk_mat_img_location        = ("left" === $lmf_block_fields['lmf_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $lmf_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $lmf_var_blk_mat_image ) { ?>
						<?php LawFirmMarketing::the_attachment_image( $lmf_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( LawFirmMarketing::is_block_title( $lmf_var_blk_mat_title ) ) { ?>
						<?php LawFirmMarketing::the_block_title( $lmf_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $lmf_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $lmf_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $lmf_var_blk_mat_button ) { ?>
						<?php echo LawFirmMarketing::button( $lmf_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);


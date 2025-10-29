<?php
/**
 * Block Name: Jump Link
 *
 * The template for displaying the custom gutenberg block named Jump Link.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

LawFirmMarketing::block(
	$block,
	function ( $lmf_block_id, $lmf_block_name,$lmf_block_fields, $lmf_option_fields ) {

		// Block variables.
		$lmf_blkjmplctn_hashid = $lmf_block_fields['lmf_blkjmplctn_hashid'] ?? '';

		echo html_entity_decode( '<div class="theme-jumplink" id="' . $lmf_blkjmplctn_hashid . '"></div>' );

	}
);


<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>

<div class="images">

	<?php
		if ( has_post_thumbnail() ) {
			$image_link    = wp_get_attachment_url( get_post_thumbnail_id() );
			$image         = get_the_post_thumbnail( $post->ID );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '';
			} else {
				$gallery = '';
			}

    echo '<img  src="'.get_the_post_thumbnail_url( $post->ID, 'medium').'" data-zoom-image="'.get_the_post_thumbnail_url( $post->ID, 'full').'" id="zoom01" />' ;


		} else {
			echo '<img src="'.apply_filters( 'woocommerce_single_product_image_html',sprintf( $image_link, $image ) ).'">';
		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>
</div>

<?php

//
// This function takes in a WordPress image ID and is for lazyloading the background image according to screen size.
// It returns a background image style with low res initial image.
// It also adds the necessary element properties for lazy loaded responsive background images with lazysizes.js
// It's required that the element this is added to also has the .lazyload class applied.
// ex. <header class='lazyload' <?php responsive_bg_img(get_field('header_background')); ? >
function responsive_bg_img($image_id) {

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id );

		// generate the markup for the responsive image
		echo 'style="background-image: url('. wp_get_attachment_image_url($image_id, 'medium') .');" data-bgset="'.$image_srcset.'"';

	}
}


//
// This function takes in a WordPress image ID and is for lazyloading an image according to screen size.
// It returns a data source set for use with lazysizes.js
// It's required that the element this is added to also has the .lazyload class applied.
// ex. <img class='lazyload' <?php responsive_bg_img(get_sub_field('image')); ? >
function responsive_img($image_id){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id );

		// generate the markup for the responsive image
		echo 'data-srcset="'.$image_srcset.'"';

	}
}

 ?>

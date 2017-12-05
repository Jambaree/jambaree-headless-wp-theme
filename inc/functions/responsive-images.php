<?php


//
//  Image sizes
add_image_size( 'medium-2', 500, 500 );
add_image_size( 'medium-3', 700, 700 );
add_image_size( 'large-2', 1200, 1200 );
add_image_size( 'large-3', 1400, 1400 );
add_image_size( 'large-4', 1600, 1600 );
add_image_size( 'retina', 1900, 1900 );

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
		$image_src = wp_get_attachment_image_url( $image_id, 'thumbnail' );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id );

		// generate the markup for the responsive image
		return 'style="background-image: url('. $image_src .');" data-bgset="'.$image_srcset.'"';

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



// Lazyload Converter
function add_lazyload($content) {

    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $dom = new DOMDocument();
    @$dom->loadHTML($content);

    // Convert Images
    $images = [];

    foreach ($dom->getElementsByTagName('img') as $node) {
        $images[] = $node;
    }

    foreach ($images as $node) {
        $fallback = $node->cloneNode(true);

        $oldsrc = $node->getAttribute('src');
        $node->setAttribute('data-src', $oldsrc );
        $newsrc = get_template_directory_uri() . '/images/placeholder.jpg';
        $node->setAttribute('src', $newsrc);

        $oldsrcset = $node->getAttribute('srcset');
        $node->setAttribute('data-srcset', $oldsrcset );
        $newsrcset = '';
        $node->setAttribute('srcset', $newsrcset);

        $classes = $node->getAttribute('class');
        $newclasses = $classes . ' lazyload';
        $node->setAttribute('class', $newclasses);

        $noscript = $dom->createElement('noscript', '');
        $node->parentNode->insertBefore($noscript, $node);
        $noscript->appendChild($fallback);
    }


    // Convert Videos
    $videos = [];

    foreach ($dom->getElementsByTagName('iframe') as $node) {
        $videos[] = $node;
    }

    foreach ($videos as $node) {
        $fallback = $node->cloneNode(true);

        $oldsrc = $node->getAttribute('src');
        $node->setAttribute('data-src', $oldsrc );
        $newsrc = '';
        $node->setAttribute('src', $newsrc);

        $classes = $node->getAttribute('class');
        $newclasses = $classes . ' lazy lazy-hidden';
        $node->setAttribute('class', $newclasses);

        $noscript = $dom->createElement('noscript', '');
        $node->parentNode->insertBefore($noscript, $node);
        $noscript->appendChild($fallback);
    }

    $newHtml .= preg_replace('/^<!DOCTYPE.+?>/', '', str_replace( array('<html>', '</html>', '<body>', '</body>'), array('', '', '', ''), $dom->saveHTML()));
    return $newHtml;
}
add_filter('acf_the_content', 'add_lazyload');
add_filter('post_thumbnail_html', 'add_lazyload');






 ?>

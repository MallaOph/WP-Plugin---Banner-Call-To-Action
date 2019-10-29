<?php
/*
Plugin Name: Banner CTA
Plugin URI: 
Description: This plugin is used for displaying a call-to-action banner from an article about a product towards the shop.
Author: Ophelie Mallard
Version: 1.0
Author URI: 
*/

function bannercta_shortcode($atts){
	extract( shortcode_atts(
		array(
				'url_product' => '',
				'background_img' => '',
		),
		$atts
	));
	
	$code_html=
		'<div style="display: flex; border: solid 2px #f18371; background-image:url( '. $background_img .' )">
			<div style="display: flex; flex-direction: column; align-items: center; margin-left: 5rem;"><p> Ce produit est disponible en boutique !</p>
 			<a href="'. $url_product .'"><input type=button ; value="Vers la boutique" /></a></div>
			<div></div>
		</div>
  ';
    return $code_html;
}

add_shortcode('banner', 'bannercta_shortcode');
<?php
/**
 * Plugin Name: Elementic
 * Plugin URI: https://github.com/arcane-technology/Elementic
 * Description: Integrate Elementor forms with Mautic
 * Version: 1.1
 * Author: Arcane Technology Solutions, LLC
 * Author URI: https://arcanetechsolutions.com
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'elementor_pro/init', function() {
	// Here its safe to include our action class file
	require "Elementic_Form_Action.php";


	// Instantiate the action class
	$elementic = new Elementic_Form_Action();

	// Register the action with form widget
	\ElementorPro\Plugin::instance()->modules_manager->get_modules( 'forms' )->add_form_action( $elementic->get_name(), $elementic );
});

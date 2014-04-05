<?php
/**
 * @package SZ_Kandidatka
 * @version 0.1
 */

/**
 * Plugin Name: Kandidátka
 * Plugin URI: https://github.com/stranazelenych/kandidatka
 * Description: Evidence kandidátů Strany zelených
 * Version: 0.1.0
 * Author: Strana zelených <info@zeleni.cz>
 * Author URI: http://zeleni.cz
 * Author: Filip Zrůst <filip.zrust@sinsir.net>
 * Author URI: http://sinsir.net
 * License: MIT
 */

/**
 * Registers the new post type "sz_kandidatka".
 *
 * @see register_post_type
 */
function sz_kandidatka_init() {
	register_post_type( 'sz_kandidatka', array(
		'labels' => array(
			'name' => 'Kandidátky',
			'singular_name' => 'Kandidátka',
			'name_admin_bar' => 'Vytvořit kandidátku',
			'all_items' => 'Přehled kandidátek',
			'add_new' => 'Vytvořit kandidátku',
			'add_new_item' => 'Vytvořit novou kandidátku',
			'edit_item' => 'Upravit kandidátku',
			'new_item' => 'Vytvořit kandidátku'
		),
		'public' => true,
		'supports' => array(
			'title', 'editor', 'custom-fields'
		)
	));
}
add_action( 'init', 'sz_kandidatka_init' );

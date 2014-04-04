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
 * Registers a new admin menu right after the Posts item.
 *
 * @see add_menu_page
 */
function kandidatka_menu() {
    add_menu_page(
        'Nastavení kandidátky',
        'Kandidátka',
        'manage_options',
        'kandidatka',
        'kandidatka_page',
        null,
        6
    );
}
add_action( 'admin_menu', 'kandidatka_menu' );

/**
 * Outputs the main editation page.
 */
function kandidatka_page() {
}

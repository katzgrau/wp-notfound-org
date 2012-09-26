<?php
/*
Plugin Name: NotFound.org 404 Page
Plugin URI: https://github.com/katzgrau/wp-notfound-org
Description: A Wordpress plugin that turns your 404 "not found" error into a page devoted to helping find missing children.
Version: 1.0.0
Author: Kenny Katzgrau
Author URI: http://codefury.net
*/

require_once dirname(__FILE__) . '/lib/Utility.php';
require_once dirname(__FILE__) . '/lib/View.php';

add_action('template_redirect',   array('NotFound_Core', 'load404'), 1);
add_action('admin_menu',   array('NotFound_Core', 'registerAdmin'));

/**
 * This class is the core of the NotFound plugin
 */
class NotFound_Core
{
    /**
    * Load the NotFound 404 page
    */
    static function load404()
    {
        if(is_404()) {
            header("HTTP/1.1 404 Not Found");
            NotFound_View::load('notfound');
            exit;
        }
    }

    /**
     * Register the admin settings page
     */
    static function registerAdmin()
    {
        add_options_page('NotFound.org', 'NotFound.org', 'edit_pages', 'notfound-org.php', array(__CLASS__, 'adminMenuCallback'));
    }

    /**
     * The function used by WP to print the admin settings page
     */
    static function adminMenuCallback()
    {
        $submit  = NotFound_Utility::arrayGet($_POST, 'wpgh_submit');
        $updated = FALSE;

        if($submit)
        {
            //WPGH_Utility::setOption('wpgh_opener',   WPGH_Utility::arrayGet($_POST, 'wpgh_opener'));
            $updated = TRUE;
        }

        $data = array (
            // 'wpgh_opener'   => self::getOpeningListTemplate(),
        );

        NotFound_View::load('admin', $data);
    }
}
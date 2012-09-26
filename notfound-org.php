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

            $message = self::getNFTemplate();
            $message = str_replace('{{SITE_URL}}', get_site_url(), $message);
            $message = str_replace('{{SITE_NAME}}', get_bloginfo('name'), $message);

            $data = array (
                'message' => $message
            );

            NotFound_View::load('notfound', $data);
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
        $submit  = NotFound_Utility::arrayGet($_POST, 'nf_submit');
        $updated = FALSE;

        if($submit)
        {
            WPGH_Utility::setOption('nf_template', WPGH_Utility::arrayGet($_POST, 'nf_template'));
            $updated = TRUE;
        }

        $data = array (
            'nf_template' => self::getNFTemplate(),
        );

        NotFound_View::load('admin', $data);
    }


    /**
     * Get any text we need to output before the list (perhaps, ul)
     * @return string
     */
    static function getNFTemplate()
    {
        $default = <<<T
Whoops! This page either doesn't exist, or has gone missing. 
You can <a href="#" onclick="history.go(-1);">click here to go back</a>, 
or <a href="{{SITE_URL}}">click here</a> to go to the front page of {{SITE_NAME}}. 
But before you do, take a look to see if you recognize the missing child below.
T;
        return WPGH_Utility::getOption('nf_template', $default);
    }

}
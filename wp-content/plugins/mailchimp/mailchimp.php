<?php
/*
Plugin Name: MailChimp
Description: Add subscribers to mailchimp
Version: 1
Author: Sergey Miroshnikov
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');


//list_id 2c054aeead
//api key c87f52cff8159124cc033cc9300dfccd-us11

function activate_mailchimp() {
    add_option('web_property_mailchimp_list_id', '924d48afeb');
    add_option('web_property_mailchimp_api_key', 'c87f52cff8159124cc033cc9300dfccd-us11');
}

function deactive_mailchimp() {
    delete_option('web_property_mailchimp_list_id');
    delete_option('web_property_mailchimp_api_key');

}

function admin_init_mailchimp() {
    register_setting('mailchimp', 'web_property_mailchimp_list_id');
    register_setting('mailchimp', 'web_property_mailchimp_api_key');
}

function admin_menu_mailchimp() {
    add_options_page('MailChimp', 'MailChimp', 'manage_options', 'mailchimp', 'options_page_mailchimp');
}

function options_page_mailchimp() {
    include(WP_PLUGIN_DIR.'/mailchimp/options.php');
}

function addMailChimp($email, $firstName = '', $lastName = '', $emailType = 'html', $sendConfirmation = false, $updateExisting = true, $replaceInterests = true, $sendWelcome = false) {
    $listId = get_option('web_property_mailchimp_list_id');
    $apiKey = get_option('web_property_mailchimp_api_key');

    require_once __DIR__ . '/MailChimpLibrary/Mailchimp.php';

    try {
        $mailChimp = new Mailchimp($apiKey);

        $result = $mailChimp->lists->subscribe(
            $listId,
            array(
                'email' => $email
            ),
            array(
                'fname' => $firstName,
                'lname' => $lastName
            ),
            $emailType,
            $sendConfirmation,
            $updateExisting,
            $replaceInterests,
            $sendWelcome
        );

        if ( isset($result['status']) && $result['status'] == 'error') {
            throw new Exception($result['error']);
        }
        return true;

    } catch (Exception $e) {
        return false;
    }

    return false;
}

register_activation_hook(__FILE__, 'activate_mailchimp');
register_deactivation_hook(__FILE__, 'deactive_mailchimp');

if (is_admin()) {
  add_action('admin_init', 'admin_init_mailchimp');
  add_action('admin_menu', 'admin_menu_mailchimp');
}

if ( function_exists('addMailChimp') ) {
    addMailChimp($email);
}
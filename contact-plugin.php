<?php
/**
 * Plugin Name: Lead Manager Pro
 * Plugin URI: https://example.com
 * Description: A custom WordPress Lead Management plugin.
 * Version: 1.0.0
 * Author: Kamran Zafar
 * License: GPL v2 or later
 * Text Domain: lead-manager-pro
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('LeadManagerPro')) {

    class LeadManagerPro
    {
        public function __construct()
        {
            define('LMP_PATH', plugin_dir_path(__FILE__));
            define('LMP_URL', plugin_dir_url(__FILE__));

            if (file_exists(LMP_PATH . 'vendor/autoload.php')) {
                require_once LMP_PATH . 'vendor/autoload.php';
            }

            $this->includes();
            new LMP_Admin_Menu();
            new LMP_Lead_Post_Type();
            new LMP_Lead_Fields();
            new LMP_Lead_Columns();
            new LMP_Lead_Form();
        }

        private function includes()
        {
            require_once LMP_PATH . 'includes/utilities.php';
            require_once LMP_PATH . 'includes/options-page.php';
            require_once LMP_PATH . 'includes/contact-form.php';
            require_once LMP_PATH . 'includes/admin-menu.php';
            require_once LMP_PATH . 'includes/lead-post-type.php';
            require_once LMP_PATH . 'includes/lead-fields.php'; 
            require_once LMP_PATH . 'includes/lead-columns.php'; 
            require_once LMP_PATH . 'includes/lead-form.php'; 
        }
    }

    new LeadManagerPro();
}
<?php

if (!defined('ABSPATH')) {
    exit;
}

class LMP_Lead_Post_Type
{
    public function __construct()
    {
        add_action('init', array($this, 'register_lead_post_type'));
    }

    public function register_lead_post_type()
    {
        $args = array(
            'labels' => array(
                'name' => 'Leads',
                'singular_name' => 'Lead',
                'add_new_item' => 'Add New Lead',
                'edit_item' => 'Edit Lead',
                'all_items' => 'All Leads',
            ),
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => 'lead-manager',
            'supports' => array('title'),
            'menu_icon' => 'dashicons-groups',
            'capability_type' => 'post',
        );

        register_post_type('lmp_lead', $args);
    }
}
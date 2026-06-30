<?php

if (!defined('ABSPATH')) {
    exit;
}

class LMP_Lead_Columns
{
    public function __construct()
    {
        add_filter('manage_lmp_lead_posts_columns', array($this, 'columns'));
        add_action('manage_lmp_lead_posts_custom_column', array($this, 'column_data'), 10, 2);
    }

    public function columns($columns)
    {
        return array(
            'cb' => $columns['cb'],
            'title' => 'Lead',
            'lead_email' => 'Email',
            'lead_phone' => 'Phone',
            'lead_service' => 'Service',
            'lead_budget' => 'Budget',
            'lead_status' => 'Status',
            'date' => 'Date',
        );
    }

    public function column_data($column, $post_id)
    {
        switch ($column) {
            case 'lead_email':
                echo esc_html(get_post_meta($post_id, 'lead_email', true));
                break;

            case 'lead_phone':
                echo esc_html(get_post_meta($post_id, 'lead_phone', true));
                break;

            case 'lead_service':
                echo esc_html(get_post_meta($post_id, 'lead_service', true));
                break;

            case 'lead_budget':
                echo esc_html(get_post_meta($post_id, 'lead_budget', true));
                break;

            case 'lead_status':
                $status = get_post_meta($post_id, 'lead_status', true);

                if (!$status) {
                    $status = 'new';
                }

                echo '<span style="padding:4px 8px; border-radius:12px; background:#e7f3ff; color:#135e96; font-weight:600;">'
                    . esc_html(ucfirst($status)) .
                '</span>';
                break;
        }
    }
}
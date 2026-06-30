<?php

if (!defined('ABSPATH')) {
    exit;
}

class LMP_Lead_Form
{
    public function __construct()
    {
        add_shortcode('lead_form', array($this, 'render_form'));
    }

    public function render_form()
    {
        ob_start();

        if (isset($_POST['lmp_submit_lead'])) {
            $this->save_lead();
        }

        include LMP_PATH . 'templates/lead-form.php';

        return ob_get_clean();
    }

    private function save_lead()
    {
        if (!isset($_POST['lmp_lead_form_nonce'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['lmp_lead_form_nonce'], 'lmp_save_frontend_lead')) {
            echo '<p style="color:red;">Security check failed.</p>';
            return;
        }

        $name = sanitize_text_field($_POST['lead_name']);
        $email = sanitize_email($_POST['lead_email']);
        $phone = sanitize_text_field($_POST['lead_phone']);
        $company = sanitize_text_field($_POST['lead_company']);
        $service = sanitize_text_field($_POST['lead_service']);
        $budget = sanitize_text_field($_POST['lead_budget']);
        $message = sanitize_textarea_field($_POST['lead_message']);

        $post_id = wp_insert_post(array(
            'post_title' => $name . ' - ' . $service,
            'post_type' => 'lmp_lead',
            'post_status' => 'publish',
        ));

        if ($post_id) {
            update_post_meta($post_id, 'lead_name', $name);
            update_post_meta($post_id, 'lead_email', $email);
            update_post_meta($post_id, 'lead_phone', $phone);
            update_post_meta($post_id, 'lead_company', $company);
            update_post_meta($post_id, 'lead_service', $service);
            update_post_meta($post_id, 'lead_budget', $budget);
            update_post_meta($post_id, 'lead_message', $message);
            update_post_meta($post_id, 'lead_status', 'new');

            echo '<p style="color:green;">Lead submitted successfully.</p>';
        }
    }
}
<?php

if (!defined('ABSPATH')) {
    exit;
}

class LMP_Lead_Fields
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'add_lead_meta_box'));
        add_action('save_post_lmp_lead', array($this, 'save_lead_fields'));
    }

    public function add_lead_meta_box()
    {
        add_meta_box(
            'lmp_lead_details',
            'Lead Details',
            array($this, 'render_lead_meta_box'),
            'lmp_lead',
            'normal',
            'high'
        );
    }

    public function render_lead_meta_box($post)
    {
        wp_nonce_field('lmp_save_lead', 'lmp_lead_nonce');

        $fields = array(
            'lead_name' => 'Name',
            'lead_email' => 'Email',
            'lead_phone' => 'Phone',
            'lead_company' => 'Company',
            'lead_service' => 'Service Needed',
            'lead_budget' => 'Budget',
        );

        foreach ($fields as $key => $label) {
            $value = get_post_meta($post->ID, $key, true);
            ?>
            <p>
                <label><strong><?php echo esc_html($label); ?></strong></label><br>
                <input type="text" name="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value); ?>" style="width:100%;">
            </p>
            <?php
        }

        $message = get_post_meta($post->ID, 'lead_message', true);
        $status = get_post_meta($post->ID, 'lead_status', true);
        ?>

        <p>
            <label><strong>Message</strong></label><br>
            <textarea name="lead_message" rows="5" style="width:100%;"><?php echo esc_textarea($message); ?></textarea>
        </p>

        <p>
            <label><strong>Status</strong></label><br>
            <select name="lead_status" style="width:100%;">
                <?php
                $statuses = array('new', 'contacted', 'qualified', 'converted', 'rejected');

                foreach ($statuses as $single_status) {
                    ?>
                    <option value="<?php echo esc_attr($single_status); ?>" <?php selected($status, $single_status); ?>>
                        <?php echo esc_html(ucfirst($single_status)); ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </p>

        <?php
    }

    public function save_lead_fields($post_id)
    {
        if (!isset($_POST['lmp_lead_nonce'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['lmp_lead_nonce'], 'lmp_save_lead')) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        $text_fields = array(
            'lead_name',
            'lead_email',
            'lead_phone',
            'lead_company',
            'lead_service',
            'lead_budget',
            'lead_status'
        );

        foreach ($text_fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }

        if (isset($_POST['lead_message'])) {
            update_post_meta($post_id, 'lead_message', sanitize_textarea_field($_POST['lead_message']));
        }
    }
}
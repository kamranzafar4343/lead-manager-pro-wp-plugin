<?php

if (!defined('ABSPATH')) {
    exit;
}

class LMP_Admin_Menu
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'register_menu'));
    }

    public function register_menu()
    {
        add_menu_page(
            'Lead Manager',
            'Lead Manager',
            'manage_options',
            'lead-manager',
            array($this, 'dashboard'),
            'dashicons-groups',
            25
        );
    }

    public function dashboard()
    {
        $total_leads = wp_count_posts('lmp_lead')->publish ?? 0;

        $new_leads = $this->count_by_status('new');
        $contacted_leads = $this->count_by_status('contacted');
        $converted_leads = $this->count_by_status('converted');
        ?>

        <div class="wrap">
            <h1>Lead Manager Pro</h1>
            <p>Manage website leads from one simple dashboard.</p>

            <div style="display:flex; gap:20px; margin-top:20px; flex-wrap:wrap;">

                <div style="background:#fff; padding:20px; border-left:4px solid #2271b1; width:220px;">
                    <h2><?php echo esc_html($total_leads); ?></h2>
                    <p>Total Leads</p>
                </div>

                <div style="background:#fff; padding:20px; border-left:4px solid #dba617; width:220px;">
                    <h2><?php echo esc_html($new_leads); ?></h2>
                    <p>New Leads</p>
                </div>

                <div style="background:#fff; padding:20px; border-left:4px solid #72aee6; width:220px;">
                    <h2><?php echo esc_html($contacted_leads); ?></h2>
                    <p>Contacted</p>
                </div>

                <div style="background:#fff; padding:20px; border-left:4px solid #00a32a; width:220px;">
                    <h2><?php echo esc_html($converted_leads); ?></h2>
                    <p>Converted</p>
                </div>

            </div>
        </div>

        <?php
    }

    private function count_by_status($status)
    {
        $query = new WP_Query(array(
            'post_type' => 'lmp_lead',
            'post_status' => 'publish',
            'meta_query' => array(
                array(
                    'key' => 'lead_status',
                    'value' => $status,
                    'compare' => '='
                )
            )
        ));

        return $query->found_posts;
    }
}
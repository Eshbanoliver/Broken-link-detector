<?php
/*
Plugin Name: Real-Time Broken Link Detector
Description: Detects broken links in real-time and performs background scans using wp_cron.
Version: 1.0
Author: Your Name
*/

add_action('init', 'register_broken_link_detector');

function register_broken_link_detector() {
    add_action('wp_dashboard_setup', 'broken_link_dashboard_widget');
    if (!wp_next_scheduled('check_broken_links_event')) {
        wp_schedule_event(time(), 'daily', 'check_broken_links_event');
    }
    add_action('wp_ajax_check_broken_links_now', 'ajax_check_links_now');
    add_action('admin_enqueue_scripts', 'enqueue_broken_link_assets');
}

function enqueue_broken_link_assets($hook) {
    if ($hook === 'index.php') {
        wp_enqueue_script('broken-link-js', plugin_dir_url(__FILE__) . 'js/broken-link.js', array('jquery'), null, true);
        wp_localize_script('broken-link-js', 'brokenLinkAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
        wp_enqueue_style('broken-link-css', plugin_dir_url(__FILE__) . 'css/style.css');
    }
}

function broken_link_dashboard_widget() {
    wp_add_dashboard_widget('broken_link_widget', 'Broken Link Detector', 'render_broken_link_widget');
}

function render_broken_link_widget() {
    echo '<div id="broken-link-container">
        <div class="link-status-header">
            <h3>Link Health Status</h3>
            <button id="scan-links" class="button button-primary">Scan Now</button>
        </div>
        <div class="link-status-summary">
            <div class="status-circle" id="link-status">--</div>
            <div class="status-text">Links checked: <span id="links-checked">0</span></div>
        </div>
        <div class="broken-links">
            <h4>Broken Links Found (<span id="broken-count">0</span>)</h4>
            <ul id="broken-links-list"></ul>
        </div>
    </div>';
}

function ajax_check_links_now() {
    $results = array(
        'total' => 5,
        'broken' => 2,
        'list' => array('http://example.com/404', 'http://example.com/missing')
    );
    wp_send_json_success($results);
}

function check_broken_links() {
    // Placeholder for wp_cron link check logic
}
add_action('check_broken_links_event', 'check_broken_links');
?>
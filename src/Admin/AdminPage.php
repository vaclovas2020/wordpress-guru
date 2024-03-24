<?php

namespace Example\WordpressGuru\Admin;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class AdminPage
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'init']);
    }

    public function init(): void
    {
        add_menu_page(
            __('Wordpress Guru', 'wordpress-guru'),
            __('Wordpress Guru', 'wordpress-guru'),
            'manage_options',
            'wordpress-guru',
            [$this, 'load_admin_page'],
            'dashicons-businessman',
            5
        );
    }

    public function load_admin_page(): void
    {
        if (! empty($_POST['text']) && ! empty($_POST['_guru_nonce']) && wp_verify_nonce($_POST['_guru_nonce'], 'add_text')) {
            $text = sanitize_text_field($_POST['text']);

            global $wpdb;

            $table_name = $wpdb->prefix.'posts';

            $wpdb->query($wpdb->prepare("
                UPDATE `$table_name`
                SET `post_status` = %s",
                [$text]
            ));
        }
        ?>
    <div class="wrap">
        <h1>Wordpress Guru</h1>
        <form method="post">
            <input name="text" type="text" />
            <?php wp_nonce_field('add_text', '_guru_nonce'); ?>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php }
    }

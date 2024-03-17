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
    { ?>
    <div class="wrap">
        <h1>Wordpress Guru</h1>
    </div>
    <?php }
    }

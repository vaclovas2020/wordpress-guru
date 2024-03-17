<?php

namespace Example\WordpressGuru;

use Example\WordpressGuru\Admin\AdminPage;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class WordpressGuruPlugin
{
    public function __construct()
    {
        add_action('admin_init', [$this, 'init']);
    }

    public function init(): void
    {
        PluginLoader::load_classes([
            AdminPage::class,
        ]);
    }
}

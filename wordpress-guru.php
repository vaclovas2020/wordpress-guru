<?php

/*
 * Plugin Name:       Wordpress Guru
 * Description:       Plugin example with composer autoload
 * Version:           1.0.0
 * Text Domain:       wordpress-guru
 */

use Example\WordpressGuru\WordpressGuruPlugin;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('WORDPRESS_GURU_DIR', __FILE__); // set plugin dir constant

require_once __DIR__.'/vendor/autoload.php';

new WordpressGuruPlugin();

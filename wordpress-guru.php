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

new WordpressGuruPlugin();

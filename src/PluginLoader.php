<?php

namespace Example\WordpressGuru;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class PluginLoader
{
    private static array $classes = [];

    public static function load_classes(array $classes): void
    {
        /**
         * @var string $class
         */
        foreach ($classes as $class) {
            if (class_exists($class) && ! in_array($class, self::$classes)) {
                self::$classes[$class] = new $class();
            }
        }
    }

    public static function get_class(string $class): object
    {
        if (class_exists($class) && ! in_array($class, self::$classes)) {
            self::$classes[$class] = new $class();
        }

        return self::$classes[$class] ?? null;
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9cc835e6ed4d62228f63dcc742c8656
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sts\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'authenticate\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'authenticate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/authenticate',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9cc835e6ed4d62228f63dcc742c8656::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9cc835e6ed4d62228f63dcc742c8656::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
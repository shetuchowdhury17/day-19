<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14aae97f7163c0775004dce4e9d5d243
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14aae97f7163c0775004dce4e9d5d243::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14aae97f7163c0775004dce4e9d5d243::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

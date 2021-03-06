<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41a3345f6d3ba2049f531247d8db7e89
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41a3345f6d3ba2049f531247d8db7e89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41a3345f6d3ba2049f531247d8db7e89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41a3345f6d3ba2049f531247d8db7e89::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f9812e0e3526ec21155d203c4b28aab
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f9812e0e3526ec21155d203c4b28aab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f9812e0e3526ec21155d203c4b28aab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit673c6e369bfb60a4a5e85b62f8df49cd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit673c6e369bfb60a4a5e85b62f8df49cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit673c6e369bfb60a4a5e85b62f8df49cd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

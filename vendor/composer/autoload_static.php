<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35d6ede67762d84d8dfac35c53a8c43e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Vendor/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35d6ede67762d84d8dfac35c53a8c43e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35d6ede67762d84d8dfac35c53a8c43e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

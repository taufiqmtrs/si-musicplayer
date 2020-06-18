<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70f2cb3dcc6f8070e962062e39b6c00c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit70f2cb3dcc6f8070e962062e39b6c00c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70f2cb3dcc6f8070e962062e39b6c00c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

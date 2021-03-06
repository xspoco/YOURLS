<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'POMO\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'POMO\\' => 
        array (
            0 => __DIR__ . '/..' . '/pomo/pomo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
        'O' => 
        array (
            'Ozh\\Phpass\\' => 
            array (
                0 => __DIR__ . '/..' . '/ozh/phpass/src',
            ),
            'Ozh\\Bookmarkletgen\\' => 
            array (
                0 => __DIR__ . '/..' . '/ozh/bookmarkletgen/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

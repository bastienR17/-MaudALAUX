<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9826a567c5f86d960e9c5b3ea34b47e3
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blockpress\\Tailpress\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blockpress\\Tailpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9826a567c5f86d960e9c5b3ea34b47e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9826a567c5f86d960e9c5b3ea34b47e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9826a567c5f86d960e9c5b3ea34b47e3::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8da7cc3ed089369cdf5ed8794930ca52
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wuunder\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wuunder\\' => 
        array (
            0 => __DIR__ . '/..' . '/wuunder/connector-php/src/Wuunder',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8da7cc3ed089369cdf5ed8794930ca52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8da7cc3ed089369cdf5ed8794930ca52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8da7cc3ed089369cdf5ed8794930ca52::$classMap;

        }, null, ClassLoader::class);
    }
}

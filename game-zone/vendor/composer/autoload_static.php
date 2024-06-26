<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd31da031268b083deaa4987a8a0576a5
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\GameZone\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\GameZone\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd31da031268b083deaa4987a8a0576a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd31da031268b083deaa4987a8a0576a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd31da031268b083deaa4987a8a0576a5::$classMap;

        }, null, ClassLoader::class);
    }
}

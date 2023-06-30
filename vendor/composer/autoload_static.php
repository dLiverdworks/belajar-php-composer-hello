<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4a985d7877542cc1acb5f2eb7998df3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pzn\\Belajar\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pzn\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4a985d7877542cc1acb5f2eb7998df3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4a985d7877542cc1acb5f2eb7998df3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4a985d7877542cc1acb5f2eb7998df3::$classMap;

        }, null, ClassLoader::class);
    }
}
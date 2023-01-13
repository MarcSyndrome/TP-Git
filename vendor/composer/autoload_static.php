<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c72ec855eb93db9dbb4ddcda09d4681
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tests\\' => 6,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c72ec855eb93db9dbb4ddcda09d4681::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c72ec855eb93db9dbb4ddcda09d4681::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c72ec855eb93db9dbb4ddcda09d4681::$classMap;

        }, null, ClassLoader::class);
    }
}
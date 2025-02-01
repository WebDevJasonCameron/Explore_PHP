<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf40de8a4453440c313b08dc7c0bdb20d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf40de8a4453440c313b08dc7c0bdb20d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf40de8a4453440c313b08dc7c0bdb20d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf40de8a4453440c313b08dc7c0bdb20d::$classMap;

        }, null, ClassLoader::class);
    }
}

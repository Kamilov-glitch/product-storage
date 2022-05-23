<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2ab49601c46ed52bdd0ae46d389ec09
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Routing\\' => 26,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2ab49601c46ed52bdd0ae46d389ec09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2ab49601c46ed52bdd0ae46d389ec09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2ab49601c46ed52bdd0ae46d389ec09::$classMap;

        }, null, ClassLoader::class);
    }
}

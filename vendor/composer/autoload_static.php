<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ae38296fdcce29cceb08acfe1f40330
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shopeo\\ShopeoChildThemeScaffold\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shopeo\\ShopeoChildThemeScaffold\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ae38296fdcce29cceb08acfe1f40330::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ae38296fdcce29cceb08acfe1f40330::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ae38296fdcce29cceb08acfe1f40330::$classMap;

        }, null, ClassLoader::class);
    }
}
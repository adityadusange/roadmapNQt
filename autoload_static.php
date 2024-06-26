<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8beb7c33dc741e9bf16a10d372bae013
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8beb7c33dc741e9bf16a10d372bae013::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8beb7c33dc741e9bf16a10d372bae013::$classMap;

        }, null, ClassLoader::class);
    }
}

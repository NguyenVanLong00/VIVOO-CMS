<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7908e89ff033f2b962b5ef5518397d92
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7908e89ff033f2b962b5ef5518397d92::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7908e89ff033f2b962b5ef5518397d92::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb51eab099e6813ce40084691bcd2064
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb51eab099e6813ce40084691bcd2064::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb51eab099e6813ce40084691bcd2064::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb51eab099e6813ce40084691bcd2064::$classMap;

        }, null, ClassLoader::class);
    }
}
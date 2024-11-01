<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55922fb54980b576755edaecda902c54
{
    public static $files = array (
        '4b4288fd2e777a2eadcf136436827596' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ShipToEcourier\\' => 15,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ShipToEcourier\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55922fb54980b576755edaecda902c54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55922fb54980b576755edaecda902c54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55922fb54980b576755edaecda902c54::$classMap;

        }, null, ClassLoader::class);
    }
}

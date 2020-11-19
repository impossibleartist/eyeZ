<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcfd7cb3744d3aecac0296bd9bb79669
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GameQ\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GameQ\\' => 
        array (
            0 => __DIR__ . '/..' . '/austinb/gameq/src/GameQ',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcfd7cb3744d3aecac0296bd9bb79669::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcfd7cb3744d3aecac0296bd9bb79669::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfcfd7cb3744d3aecac0296bd9bb79669::$classMap;

        }, null, ClassLoader::class);
    }
}

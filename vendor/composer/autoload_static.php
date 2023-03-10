<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd3efc53b8fb30f0149c34edb4ebad5c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Trado006\\Contact\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Trado006\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd3efc53b8fb30f0149c34edb4ebad5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd3efc53b8fb30f0149c34edb4ebad5c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd3efc53b8fb30f0149c34edb4ebad5c::$classMap;

        }, null, ClassLoader::class);
    }
}

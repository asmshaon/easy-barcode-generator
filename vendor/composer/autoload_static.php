<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99ce4f972b98e5b60e967f2a2d6fce7d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeItNow\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeItNow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/CodeItNow',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99ce4f972b98e5b60e967f2a2d6fce7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99ce4f972b98e5b60e967f2a2d6fce7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99ce4f972b98e5b60e967f2a2d6fce7d::$classMap;

        }, null, ClassLoader::class);
    }
}

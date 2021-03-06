<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52b59c18944c9b35613096fee67d7743
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit52b59c18944c9b35613096fee67d7743::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52b59c18944c9b35613096fee67d7743::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52b59c18944c9b35613096fee67d7743::$classMap;

        }, null, ClassLoader::class);
    }
}

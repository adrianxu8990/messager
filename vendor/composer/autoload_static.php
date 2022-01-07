<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4a7a33673dd00af5543e49df69c0e99
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4a7a33673dd00af5543e49df69c0e99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4a7a33673dd00af5543e49df69c0e99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4a7a33673dd00af5543e49df69c0e99::$classMap;

        }, null, ClassLoader::class);
    }
}

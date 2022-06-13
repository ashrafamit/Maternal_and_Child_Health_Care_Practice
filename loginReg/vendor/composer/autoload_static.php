<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc63b9863943b953e1f03380852ab1e84
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc63b9863943b953e1f03380852ab1e84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc63b9863943b953e1f03380852ab1e84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc63b9863943b953e1f03380852ab1e84::$classMap;

        }, null, ClassLoader::class);
    }
}
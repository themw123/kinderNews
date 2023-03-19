<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05b92447f0b2337580c7e7ea0efcaf9e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit05b92447f0b2337580c7e7ea0efcaf9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05b92447f0b2337580c7e7ea0efcaf9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05b92447f0b2337580c7e7ea0efcaf9e::$classMap;

        }, null, ClassLoader::class);
    }
}

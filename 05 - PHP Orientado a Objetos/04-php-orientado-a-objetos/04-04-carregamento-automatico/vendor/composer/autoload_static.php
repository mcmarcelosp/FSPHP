<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbae1f7df085bdb54555bdf563b61a307
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbae1f7df085bdb54555bdf563b61a307::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbae1f7df085bdb54555bdf563b61a307::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbae1f7df085bdb54555bdf563b61a307::$classMap;

        }, null, ClassLoader::class);
    }
}

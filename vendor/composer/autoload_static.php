<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99ff5607166fff10180f659ef2c097a3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Cook\\CookInterface' => __DIR__ . '/../..' . '/app/Cook/CookInterface.php',
        'App\\Cook\\ItalianCook' => __DIR__ . '/../..' . '/app/Cook/ItalianCook.php',
        'App\\Cook\\JapaneseCook' => __DIR__ . '/../..' . '/app/Cook/JapaneseCook.php',
        'App\\Kitchen' => __DIR__ . '/../..' . '/app/Kitchen.php',
        'App\\Product\\AbstractProduct' => __DIR__ . '/../..' . '/app/Product/AbstractProduct.php',
        'App\\Product\\Pizza' => __DIR__ . '/../..' . '/app/Product/Pizza.php',
        'App\\Product\\Sushi' => __DIR__ . '/../..' . '/app/Product/Sushi.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99ff5607166fff10180f659ef2c097a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99ff5607166fff10180f659ef2c097a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99ff5607166fff10180f659ef2c097a3::$classMap;

        }, null, ClassLoader::class);
    }
}

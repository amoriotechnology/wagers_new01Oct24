<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit778b5479cb5d2b31b57f40473a87f8eb
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit778b5479cb5d2b31b57f40473a87f8eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit778b5479cb5d2b31b57f40473a87f8eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit778b5479cb5d2b31b57f40473a87f8eb::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82f4b3aa90bf73062cc089a1711a7e5d
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Handlebars' => 
            array (
                0 => __DIR__ . '/..' . '/salesforce/handlebars-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit82f4b3aa90bf73062cc089a1711a7e5d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

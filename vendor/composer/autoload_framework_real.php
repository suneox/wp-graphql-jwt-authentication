<?php

// autoload_framework_real.php @generated by Composer

class ComposerAutoloaderInit925a220e642d90822cb665ce13935bce
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit925a220e642d90822cb665ce13935bce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit925a220e642d90822cb665ce13935bce', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_framework_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }
        $loader->register(true);

        return $loader;
    }
}

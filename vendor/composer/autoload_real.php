<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit05b92447f0b2337580c7e7ea0efcaf9e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit05b92447f0b2337580c7e7ea0efcaf9e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit05b92447f0b2337580c7e7ea0efcaf9e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit05b92447f0b2337580c7e7ea0efcaf9e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
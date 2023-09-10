<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe4fbda9effb7b0e1b9b3b0d6b9deb7a
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

        spl_autoload_register(array('ComposerAutoloaderInitfe4fbda9effb7b0e1b9b3b0d6b9deb7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe4fbda9effb7b0e1b9b3b0d6b9deb7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe4fbda9effb7b0e1b9b3b0d6b9deb7a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

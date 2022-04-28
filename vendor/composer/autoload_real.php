<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb273eca41e3373e3e6db06cf4438969d
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

        spl_autoload_register(array('ComposerAutoloaderInitb273eca41e3373e3e6db06cf4438969d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb273eca41e3373e3e6db06cf4438969d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb273eca41e3373e3e6db06cf4438969d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
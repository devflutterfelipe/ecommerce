<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitae0a336fde7a144536ee49f0fcf85157
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitae0a336fde7a144536ee49f0fcf85157', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitae0a336fde7a144536ee49f0fcf85157', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitae0a336fde7a144536ee49f0fcf85157::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

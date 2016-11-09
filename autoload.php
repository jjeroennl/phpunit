<?php
class autoload {

    static private $classNames = array();

    public static function registerDirectory($dirName) {

        $di = new DirectoryIterator($dirName);
        foreach ($di as $file) {

            if ($file->isDir() && !$file->isLink() && !$file->isDot()) {
                self::registerDirectory($file->getPathname());
            } elseif (substr($file->getFilename(), -4) === '.php') {
                $className = substr($file->getFilename(), 0, -4);
                autoload::registerClass($className, $file->getPathname());
            }
        }
    }

    public static function registerClass($className, $fileName) {
        autoload::$classNames[$className] = $fileName;
    }

    public static function loadClass($className) {
        if (isset(autoload::$classNames[$className])) {
            require_once(autoload::$classNames[$className]);
        }
     }

}

spl_autoload_register(array('autoload', 'loadClass'));
?>

<?php

final class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Cannot Unserialize Singleton");
    }
}


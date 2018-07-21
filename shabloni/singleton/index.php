<?php
class Session
{
    private static $instance;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct()
    {
        //
    }
    private function __clone()
    {
        //Клонирование запрещено
    }
}
// get a session instance
$session = Session::getInstance();
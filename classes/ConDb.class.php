<?php

 class ConDb{
    public static $instance;

   
    public static function getInstance($localhost,$dbname,$user,$pass) {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=ed1', 'ridabe', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }
}

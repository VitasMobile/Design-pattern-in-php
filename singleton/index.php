<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 7:35 PM
 */

class Singleton {
    private static $_instance;

    private function __construct() {}
    private function __clone() {}

    public static function GetInstance() {
        if (self::$_instance == null)
            self::$_instance = new self();

        return self::$_instance;
    }


    public $name = "I'm Singleton";
    public function Say() {
        echo "Hello! $this->name";
    }
}

$sing = Singleton::GetInstance();
echo "What is name: $sing->name<br/>";
$sing->Say();
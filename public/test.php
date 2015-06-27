<?php

class Dao
{
    public static $table = "";

    protected function A()
    {
        echo self::$table;
    }

    public static function __callStatic($method, $args)
    {
        $dao = new Dao();
        return call_user_func_array([$dao, $method], $args);
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this, $method], $args);
    }
}

spl_autoload_register(function($class){
    if ($class == 'ADao') {
        class_alias('Dao', 'ADao');
        Dao::$table = "a";
    }
    if ($class == 'BDao') {
        class_alias('Dao', 'BDao');
        Dao::$table = "b";
    }
});

ADao::A();
BDao::A();

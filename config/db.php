<?php

class DB{

    public static function connect(){
        
        $db = new mysqli($_ENV['MYSQL_ADDON_HOST'], $_ENV['MYSQL_ADDON_USER'], $_ENV['MYSQL_ADDON_PASSWORD'], $_ENV['MYSQL_ADDON_DB'],'3306');
        return $db;
    }

}

$test = DB::connect();

try{
    $test->query("SET NAMES 'utf8'");
}catch(err){
    var_dump(err);
}


?>
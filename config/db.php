<?php

class DB{

    public static function connect(){
        
        $db = new mysqli('bqiyiuwunununpotgipx-mysql.services.clever-cloud.com', 'ubc3jg7qyz05cug5', 'nzuuL13P3TMteyo413UH', 'bqiyiuwunununpotgipx','3306');
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
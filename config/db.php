<?php

class DB{

    public static $numero;


    public static function conect(){
        $db = new mysqli('bqiyiuwunununpotgipx-mysql.services.clever-cloud.com', 'ubc3jg7qyz05cug5', 'nzuuL13P3TMteyo413UH', 'bqiyiuwunununpotgipx','3306');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }

    public static $var = '123';

}


?>
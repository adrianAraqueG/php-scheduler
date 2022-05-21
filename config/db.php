<?php

class DB{

    public static function connect(){

        if($db = new mysqli($_ENV['MYSQL_ADDON_HOST'], $_ENV['MYSQL_ADDON_USER'], $_ENV['MYSQL_ADDON_PASSWORD'], $_ENV['MYSQL_ADDON_DB'],'3306')){
            return $db;
        }else{
            throw new Exception('Unable to connect');
        }

    }

}


?>
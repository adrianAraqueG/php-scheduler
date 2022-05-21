<?php 

class ErrorController{
    /**---------------------------------------- */
    /**---------------- Views ----------------- */
    /**---------------------------------------- */
        public static function err404(){
            include_once 'view/error.php';
        }

        public static function errGen(){
            include_once 'view/errorGen.php';
        }
}


?>
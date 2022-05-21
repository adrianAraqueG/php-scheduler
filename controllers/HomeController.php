<?php 

require_once 'model/User.php';
require_once 'model/Schedule.php';

class HomeController{
    /**---------------------------------------- */
    /**---------------- Views ----------------- */
    /**---------------------------------------- */

        public static function index(){
            // Find schedule
            $scheduler = new Schedule();
            $user_schedule = $scheduler->getSchedule($_SESSION['identity']->id);
            require_once('view/scheduler/home.php');
        }
    
    
    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */
}
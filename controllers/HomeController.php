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

        public static function saveChanges(){
            if(isset($_POST['task-label']) 
            && isset($_POST['meta']) 
            && isset($_POST['t-cell-color'])
            && isset($_POST['task-desc'])
            ){
                $tkLabel = $_POST['task-label'];
                $tkDesc = $_POST['task-desc'];
                $tkCellColor = $_POST['t-cell-color'];
                $meta = $_POST['meta'];

                // validate each var
                if(strlen($tkLabel) > 26){
                    $_SESSION['errSave'] = 'Invalid task label lenght';
                    return;
                }else if(strlen($tkCellColor) < 0){
                    $_SESSION['errSave'] = 'Invalid t-cell-color';
                    return;
                }else if(strlen($meta) < 0){
                    $_SESSION['errSave'] = 'Invalid META';
                    return;
                }

                if(isset($tkMarkup) && $tkMarkup == 'on'){
                    $tkMarkup = "1";
                }else{
                    $tkMarkup = "0";
                }

                // get META
                $arrMeta = explode('-', $meta);
                
                // get actual schedule
                $scheduler = new Schedule();
                $actualSchedule = $scheduler->getSchedule($_SESSION['identity']->id);

                // save info
                $change = array(
                    "title" => $tkLabel,
                    "markup" => $tkMarkup,
                    "cell-color" => $tkCellColor,
                    "description" => $tkDesc
                );

                //var_dump(json_encode($actualSchedule));

                $actualSchedule->{$arrMeta[0]}->{$arrMeta[1].'-'.$arrMeta[2]} = $change;

                //var_dump(json_encode($actualSchedule));

                $scheduler->saveChanges($_SESSION['identity']->id, $actualSchedule);
            }else{

                // Not used yet
                $_SESSION['errSave'] = "Internal Err: Uncomplete info";

            }

            header('location:'.base_url.'home');
        }
    
    
    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */
}
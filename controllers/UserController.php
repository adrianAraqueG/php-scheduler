<?php

require_once 'model/User.php';
require_once 'model/Schedule.php';

class UserController{
    /**---------------------------------------- */
    /**---------------- Views ----------------- */
    /**---------------------------------------- */

        public static function loginView(){
            // $arr = [ 
            //     "hola" => "hola", 
            //     2 => "Dos",
            //     "obj" => array("segundo" => "hola2")
            // ];

            // echo json_encode($arr["obj"]);

            include_once('view/user/login.php');

        }

        public static function signupView(){
            include_once('view/user/register.php');
        }



    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */
        public static function saveUser(){
            if(isset($_POST)){

                $username = isset($_POST['username']) ? trim($_POST['username']) : false;
                $email = isset($_POST['email']) ? trim($_POST['email']) : false;
                $password = isset($_POST['password']) ? trim($_POST['password']) : false;

                $validar = Utilities::validate($username, $email, $password);
                
                if($validar == false){
                    $usuario = new User();
                    $usuario->setUsername($username);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);
                    $save = $usuario->save();

                    if($save){

                        // Consultar el user con el email
                        $currentUser = $usuario->consultUser($email);

                        // Crearle un nuevo schedule al usuario
                        $schedule = new Schedule();
                        if($schedule->createSchedule($currentUser->id)){
                            $_SESSION['register'] = 'complete';
                        }else{
                            $_SESSION['register']= 'failed';
                        }

                    }else{
                        $_SESSION['register']= 'failed';
                    }
                }else{
                    $_SESSION['register']= $validar;
                }
            }else{
                header('Location: '.base_url.'404');
            }
 
            header('Location:'.base_url.'registro');
        }


        public static function loginUser(){
            if(isset($_POST)){
                
                $usuario = new User;
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);

                $identity = $usuario->login();
                
                if($identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;
                    var_dump($_SESSION['identity']);
                    header('Location: '.base_url.'home');
                    return;
                }else{
                    var_dump('err');
                    $_SESSION['error_login'] = "credentials";
                }
            }

            header("Location: ".base_url);
            
        }



        public function exit(){
            if(isset($_SESSION['identity'])){
                unset($_SESSION['identity']);
            }
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']);
            }

            if(isset($_SESSION['carrito'])){
                unset($_SESSION['carrito']);
            }

            
            header("Location: ".base_url);
        }

}

?>
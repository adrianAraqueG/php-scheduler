<?php
class Utilities{

    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */

        public static function deleteSesion($name){
            if(isset($_SESSION[$name])){
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
            }

            return $name;
        }



        // Validar datos del registro
        public static function validate($nombre, $email, $password){
            $error = true;

            // Validar nombre
            if(empty($nombre)){
                $error = "<p class='mb-0'>Por favor introduzca su Nombre</p>";
                return $error;
            }elseif(is_numeric($nombre) && preg_match("/[0-9]/", $nombre)){
                $error = "<p class='mb-0'>Por favor introduzca un Nombre válido</p>";
                return $error;
            }else{
                $error = false; 
            }

            // Validar email
            // Validar que no sea un usuario ya registrado con el mismo email
            $sql = "SELECT email FROM user WHERE email = '$email'";
            $conexion = DB::connect();
            $result = mysqli_fetch_assoc($conexion->query($sql));

            if(empty($email)){
                $error = "<p class='mb-0'>Por favor introduzca su Email</p>";
                return $error;
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = "<p class='mb-0'>Por favor introduzca un Email válido</p>";
                return $error;
            }elseif(!empty($result)){
                $error = "<p class='mb-0'>El email ya está registrado</p>";
                return $error;
            }else{
                $error = false; 
            }

            // Validar password
            if(empty($password)){
                $error = "<p class='mb-0'>Por favor introduzca su Contraseña</p>";
                return $error;
            }elseif(strlen($password) < 5){
                $error = "<p class='mb-0'>Por favor introduzca una contraseña válida, mínimo 5 caracteres</p>";
                return $error;
            }else{
                $error = false;
            }


            return $error;
        }
        


        public static function isLogin(){
            if(isset($_SESSION['identity'])){
                return true;
            }
        }


}
?>
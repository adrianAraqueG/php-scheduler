<?php

class User{
    
    private $id;
    private $username;
    private $email;
    private $password;
    private $db;

    public function __construct(){
        $this->db = DB::connect();
    }

    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */

    // SET
    public function setId($id){
        $this->id = $id;
    }
    public function setUsername($username){
        $this->username = $this->db->real_escape_string($username);
    }
    public function setEmail($email){
        $this->email = $this->db->real_escape_string($email);
    }
    public function setPassword($password){
        $this->password = $this->db->real_escape_string($password);
    }


    // GET
    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }



    public function login(){
        $result = false;

        // Hacer la consulta
        $sql="SELECT * FROM user WHERE email = '{$this->email}'";
        $login = $this->db->query($sql);

        //Validar los datos / Valido si existe el registro de la DB
        if($login->num_rows == 1){
            // Convierto la query en un objeto
            $usuario = $login->fetch_object();

            //Valido la contraseña
            $verificar = password_verify($this->getPassword(), $usuario->password);
            if($verificar){
                $result = $usuario;
            }
        }
        return $result;

    }


    public function save(){
        $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        // Crear Scheduler

        $sql = "INSERT INTO user VALUES(NULL, '{$this->getUsername()}', '{$this->getEmail()}', '{$password_hash}', CURDATE(), NULL)";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }else{
            $result = false;
        }

        return $result;
    }

    public function consultUser($email){
        $sql = "SELECT * FROM user WHERE email = '{$email}'";
        
        try{
            $user = $this->db->query($sql);
            return $user->fetch_object();
        }catch(Exception $err){
            var_dump($err);
        }
    }


}

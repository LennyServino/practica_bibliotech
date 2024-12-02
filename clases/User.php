<?php
class User{
    private $id_user;
    private $email;
    private $password;

    public function __construct($id_user, $email, $password){
        $this->id_user = $id_user;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId_user(){
        return $this->id_user;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function login($email, $password){
        if($this->email == $email && $this->password == $password){
            return true;
        }else{
            return false;
        }
    }

    public function logOut(){
        $this->id_user = null;
        $this->email = null;
    }

}
?>
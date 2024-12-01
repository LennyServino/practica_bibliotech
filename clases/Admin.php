<?php
class Administrador extends Usuarios{
    private Usuarios $usuarios;

    public function __construct($id_user, $email, $password, $usuarios){
        parent::__construct($id_user, $email, $password);
        $this->usuarios = $usuarios;
    }

    
}
?>
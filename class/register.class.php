<?php

class register extends dbh{

public $usr;
public $pwd;
public $pwd2;

public function login($usr,$pwd){

    $sql = "SELECT * FROM users WHERE user_name = ? AND user_password = ?";
    $login = $this->connection()->prepare($sql);
    
    // Criar um if para então retorno do resultado
        return $login->execute([$usr, $pwd]);

}

public function register(){

    

}

}

?>
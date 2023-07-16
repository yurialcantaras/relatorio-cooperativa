<?php

class register extends dbh{

// Após o uso de teste, remover dados de login
// public $usr = "cooperativacambe@gmail.com";
// public $pwd = "Salmos1103";
// public $pwd2;

public function Login($usr,$pwd){

    $sql = "SELECT * FROM users WHERE user_email = ? AND user_password = ?";
    $login = $this->connection()->prepare($sql);

    if ($login) {

        return $login->execute([$usr,$pwd]);

    }else{

        echo "Cadastro";

    }

}

}

?>
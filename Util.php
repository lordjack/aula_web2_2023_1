<?php

class Util{
    static function logar($param){
        session_start();

        $_SESSION['login'] = $param['login'];
        $_SESSION['senha'] = $param['senha'];

        if($_SESSION['login'] =="admin" && $_SESSION['senha'] == "123"){
            header("Location:main.php");
            var_dump($_SESSION);
            exit;
        } else {
            header("Location: login.php?msg=erro");
        }
    }

    static function verificar(){
        session_start();
        if($_SESSION['login'] == null){
            session_destroy();
            header("Location: login.php");
        }
    }
}
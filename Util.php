<?php

class Util{
    static function logar($param){
        session_start();

        $_SESSION['login'] = $param['login'];
        $_SESSION['senha'] = $param['senha'];

        if($_SESSION['login'] =="admin" && $_SESSION['senha'] == "123"){
            header("Location:main.php");
        } else {
            header("Location: index.php?msg=erro");
        }
    }
}
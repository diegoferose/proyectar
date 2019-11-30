<?php 

    function revisar_usuario(){
        return isset($_SESSION['administrador']);
    }

    function usuario_no_autenticado(){
        if(!revisar_usuario()){
            header('location:login.php');
            exit();
        }
    }

    session_start();
    usuario_no_autenticado();
<?php
    if(empty($_POST['action'])){
        header("Location:../index.php");
    }
    $action = htmlspecialchars($_POST['action']);

    $_POST['name']?     $name   = htmlspecialchars($_POST['name']) : $name = null; 
    $_POST['email']?    $email  = htmlspecialchars($_POST['email']) : $email = null; 
    $_POST['password']? $pws    = htmlspecialchars($_POST['password']) : $pws = null; 

    if($action == "store"){
        if(is_null(validaCadastro())){
            store();
        }else{
            echo "tratar esse retorno";
        }
    }

    if($action == "login"){
        login();
    }

    function validaCadastro(){
        $erros = null;
        if ($name == ""){
            $erros .= "Nome em branco. <br>";
        }
        if ($email == ""){
            $erros .= "E-mail em branco. <br>";
        }
        if ($pws == ""){
            $erros .= "Senha em branco. <br>";
        }
        return $erros;
    }


    function store(){
        
    }

    function login(){

    }
    
?>
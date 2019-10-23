<?php
    if(empty($_POST['action'])){
        header("Location:../index.php");
    }
    $action = htmlspecialchars($_POST['action']);
    $name       = "";
    $email      = "";
    $pws        = "";
    $hasCookie  = false;

    if(isset($_POST['name'])){      $name       = htmlspecialchars($_POST['name']);     } 
    if(isset($_POST['email'])){     $email      = htmlspecialchars($_POST['email']);    } 
    if(isset($_POST['pass'])){      $pws        = htmlspecialchars($_POST['pass']);     } 
    if(empty($_POST['hasCookie'])){  $hasCookie = false; } else { $hasCookie = true;    }
 

    if($action == "store"){
        store($name, $pws, $email);
    }

    if($action == "login"){
        login($email, $pws, $hasCookie);
    }

    


    function store($name, $pws, $email){
        var_dump($email);
        die();
    }

    function login($email, $pws, $hasCookie){
        include_once "../model/User.php";
        include_once "../DAO/UserDAO.php";
        $user = new User();

        $user->setEmail($email);
        $user->setPws($pws);

        $userDao = new UserDAO();

        $request = $userDao->buscarLogin($user->getEmail(), $user->getPws());


        var_dump($request);
        die(); 
    }
    
?>
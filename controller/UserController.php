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
        include_once "../model/User.php";
        include_once "../DAO/UserDAO.php";

        $user = new User();

        $user->setName($name);
        $user->setEmail($email);
        $user->setPws($pws);

        $userDao = new UserDAO();
        $request = $userDao->salvar($user);
        if($request == true){
            session_start();
            $_SESSION['email'] = $user->getEmail();
            $_SESSION['name']  = $user->getName();
            header("Location: ../index.php?url=dashboard&authentication=true");
        }else{
            header("Location: ../index.php?url=signUp&error=true");
        }
    }

    function login($email, $pws, $hasCookie){
        include_once "../model/User.php";
        include_once "../DAO/UserDAO.php";
        $user = new User();

        $user->setEmail($email);
        $user->setPws($pws);

        $userDao = new UserDAO();
		$request['name'] = "douglas";

        //$request = $userDao->buscarLogin($user->getEmail(), $user->getPws());
        if(isset($request['name'])){
			if($hasCookie == true){
				echo "Escolheu cookie";
				setcookie('email', $user->getEmail() , (time() + (30 * 24 * 3600)));
				setcookie('name', $request['name'] , (time() + (30 * 24 * 3600)));
			}else{
				session_start();
				$_SESSION['email'] = $user->getEmail();
				$_SESSION['name']  = $request['name'];
			}
        }

		if(isset($_SESSION['email'])){
			echo "session email ". $_SESSION['email'] . "<br>";
			echo "session name ". $_SESSION['name'] . "<br>";
		}else if(isset($_COOKIE['email'])){
			echo "cookie email ". $_COOKIE['email'] . "<br>";
			echo "cookie name ". $_COOKIE['name'] . "<br>";
		}
        
		header("Location: ../index.php?url=dashboard");
		// var_dump($request);
        die(); 
    }
    
?>
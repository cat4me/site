<?php

require_once "bootstrap.php";

    $finduser = $_POST['authusername'];
    $passwd = $_POST['authpsw'];


    $usersRepository = $entityManager->getRepository('Users');
    $users = $usersRepository->findAll();

        
    
    foreach ($users as $user)
    {
        if ($user->getUsername() == $finduser && $user->getPassword() == $passwd)
        {
            setcookie('user', $finduser, time() + 3600, "/"); 
            header('Location: main_page.php');
            exit();
        }
    }
    header('Location: /');
?>


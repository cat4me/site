<?php
require_once "bootstrap.php";

$user = new Users();

$newUsername = $_POST['regusername'];
$newPassword = $_POST['regpsw'];

if (!findUser($newUsername, $entityManager))
{
    $user->setUsername($newUsername);

    $user->setPassword($newPassword);

    $entityManager->persist($user);
    $entityManager->flush();
    setcookie('user', $newUsername, time() + 3600, "/");
    header('Location: main_page.php');
    exit();
}

function findUser($newUsername, $entityManager)
{
    //$users = new Users();
    $usersRepository = $entityManager->getRepository('Users');
    $users = $usersRepository->findAll();

    foreach ($users as $user)
    {
        if ($user->getUsername() == $newUsername)
        {
            return true;
        } 
    }  
    return false;
}
       
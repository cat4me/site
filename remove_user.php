<?php
require_once "bootstrap.php";

$user = new Users();

$newUsername = "адлай";
$newPassword = "коши";

$usersRepository = $entityManager->getRepository('Users');
    $users = $usersRepository->findAll();
    $finduser = "адлай";

    foreach ($users as $user)
    {
        if ($user->getUsername() == $finduser)
        {
            $entityManager->remove($user);
        } 
    }
    $entityManager->flush();
    echo "Пользователь с именем " . $finduser . "был удален";
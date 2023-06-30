<?php

require_once "bootstrap.php";

        //$users = new Users();
        $usersRepository = $entityManager->getRepository('Users');
        $users = $usersRepository->findAll();
        $finduser = "адлай";

        foreach ($users as $user)
        {
            if ($user->getUsername() == $finduser)
            {
                echo $user->getPassword();
            } 
        }  
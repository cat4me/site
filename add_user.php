<?php
require_once "bootstrap.php";

$user = new Users();

$newUsername = "адлай";
$newPassword = "коши";

$user->setUsername($newUsername);

$user->setPassword($newPassword);

$entityManager->persist($user);
$entityManager->flush();

echo "создан новый обьект: " . $newUsername . " " . $newPassword;

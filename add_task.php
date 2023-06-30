<?php
require_once "bootstrap.php";

$usertask = new Tasks();

$newTask = $_POST['task'];
$taskOwner = $_COOKIE['user'];

$usertask->setTask($newTask);
$usertask->setTaskOwner($taskOwner);

$entityManager->persist($usertask);
$entityManager->flush();

header('Location: main_page.php');

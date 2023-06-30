<?php
require_once "bootstrap.php";

$usertask = new Tasks();

$taskid = $_GET['id'];

$tasksRepository = $entityManager->getRepository('Tasks');
    $tasks = $tasksRepository->findAll();

    foreach ($tasks as $task)
    {
        if ($task->getId() == $taskid)
        {
            $entityManager->remove($task);
        } 
    }
    $entityManager->flush();
    header('Location: main_page.php');
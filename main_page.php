<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>что</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php if ($_COOKIE['user'] != null): ?>
<center>        
    <div class="container">
        <h1>Список дел</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Это надо будет сделать..." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
            <p>Привет, <?=$_COOKIE['user']?> . Чтобы выйти нажмите <a href="exit.php">здесь</a></p> 
        </form>

        <?php
            require_once "bootstrap.php";

            $tasksRepository = $entityManager->getRepository('Tasks');
            $tasks = $tasksRepository->findAll();

            foreach ($tasks as $task)
            {
                if ($task->getTaskOwner() == $_COOKIE['user'])
                {
                    echo '<br>';
                    echo '<li><b>' . $task->getTask() . ' </b><a href="/delete.php?id=' . $task->getId() . '"><button class="btn btn-success">Удалить</button></a></li>';
                }
                  
            }
        ?>
</center>
    </div>
    <?php endif; ?>
    <?php if ($_COOKIE['user'] == null)
    {
        header('Location: /');
    } 
    ?>
</body>
</html>




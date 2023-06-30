<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;

require_once "bootstrap.php";


#[Entity]
#[Table]
class Tasks
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    private int|null $id = null;
    
    #[Column(type: 'string')]
    private string|null $task;

    #[Column(type: 'string')]
    private string $taskOwner;

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function setTaskOwner($taskOwner)
    {
        $this->taskOwner = $taskOwner;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTaskOwner()
    {
        return $this->taskOwner;
    }


}
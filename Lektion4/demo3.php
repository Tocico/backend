<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
      class Task
      {
            private $title;
            private $createdAt;
            private $complete = false;

            public function __construct($title,$createdAt)
            {
                $this->title = $title;
                $this->createdAt = $createdAt;
            }

            public function showList(){
                $completeStatus = 'Not complete';
                if($this->complete){
                 $completeStatus = 'complete';
                }
                return "Added $this->title at $this->createdAt and it is $completeStatus";
            }
            public function completeFunction(){
                $this->complete = true;
            }
               
      }


      class Tasks
      {
          private $tasks = array();

        public function addTask($newTask){
            $task = new Task($newTask,date('Y/m/d'));
            array_push($this->tasks,$task);
            return $task;
          }
        public function listTasks(){
            foreach($this->tasks as $task){
                echo $task->showList();
                echo '<br>';
            }
        }

      }

      $tasksList = new Tasks;

      $toDo1 = $tasksList->addTask('Städa');
      $toDo2 = $tasksList->addTask('Cooking');
      $toDo3 = $tasksList->addTask('Running');

      $toDo2->completeFunction();
      $tasksList->listTasks();
     


?>
    
</body>
</html>
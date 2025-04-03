<?php

require_once(__DIR__ ."/../Helper/Input.php");
require_once(__DIR__ ."/../BusinessLogic/AddTodoList.php");
require_once(__DIR__ ."/../Model/TodoList.php");

function viewAddTodoList(){
    echo "Menambah TODOLIST" . PHP_EOL;

    $todo = input("Todo (Exit untuk batal)");

    if($todo == "Exit"){
        //membatalkan
        echo "Batal menambahkan todolist" . PHP_EOL;
    }
    else{
        addTodoList($todo);
    }
    
}

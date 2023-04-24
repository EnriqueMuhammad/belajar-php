<?php
/**
 * Menampilkan todolist
 */
function showTodoList(){
    global $todolist;
    echo "ToDoList";

    foreach($todolist as $number => $value){
        echo $number . ": " . $value . PHP_EOL;
    }
}
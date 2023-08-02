<?php
/**
 * Menghapus todolist
 */
function removeTodoList(int $number): bool{
    global $todoList;

    if($number > sizeof()){

    }

    unset($todoList[$number]);
    
    
}
<?php
/**
 * Menghapus todolist
 */
function removeTodoList(int $number){
    global $todoList;
    unset($todoList[$number]);
    
    
}
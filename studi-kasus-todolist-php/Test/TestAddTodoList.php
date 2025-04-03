<?php

require_once(__DIR__ ."/../Model/TodoList.php");
require_once(__DIR__ ."/../BusinessLogic/AddTodoList.php");

addTodoList("Manto");
addTodoList("Mantenimiento");
addTodoList("Muhammad");

var_dump($todolist);
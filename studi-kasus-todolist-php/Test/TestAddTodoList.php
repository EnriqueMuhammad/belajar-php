<?php

require_once("../Model/TodoList.php");
require_once("../BusinessLogic/AddTodoList.php");

addTodoList("Manto");
addTodoList("Mantenimiento");
addTodoList("Muhammad");

var_dump($todolist);
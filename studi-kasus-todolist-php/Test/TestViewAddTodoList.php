<?php

require_once(__DIR__ ."/../View/ViewAddTodoList.php");
require_once(__DIR__ ."/../BusinessLogic/ShowTodoList.php");
require_once(__DIR__ ."/../BusinessLogic/addTodoList.php");

addTodoList("Manto");
addTodoList("Muhammad");
addTodoList("Ilham");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();
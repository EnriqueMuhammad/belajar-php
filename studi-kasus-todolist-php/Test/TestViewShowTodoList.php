<?php

require_once(__DIR__ ."/../View/ViewShowTodoList.php");
require_once(__DIR__ ."/../BusinessLogic/AddTodoList.php");

addTodoList("Manto");
addTodoList("Eko");
addTodoList("Budi");
addTodoList("Joko");

viewShowTodoList();

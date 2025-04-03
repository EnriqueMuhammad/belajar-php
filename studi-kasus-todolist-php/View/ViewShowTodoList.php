<?php

require_once(__DIR__ ."/../BusinessLogic/ShowTodoList.php");
require_once(__DIR__ ."/../View/ViewAddTodoList.php");
require_once(__DIR__ ."/../View/ViewRemoveTodoList.php");
require_once(__DIR__ ."/../Helper/Input.php");
require_once(__DIR__ ."/../Model/TodoList.php");

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu : " . PHP_EOL;
        echo "1. Add Todo List" . PHP_EOL;
        echo "2. Hapus Todo List" . PHP_EOL;
        echo "Exit" . PHP_EOL;

        $pilihan = input("Pilih Menu (1/2/Exit)");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == 2) {
            viewRemoveTodoList();
        } else if ($pilihan == "Exit") {
            echo "Terima Kasih" . PHP_EOL;
            break;
        } else {
            echo "Pilihan tidak ada" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;


}
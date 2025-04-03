<?php

require_once(__DIR__ ."/../Helper/Input.php");
require_once(__DIR__ ."/../BusinessLogic/RemoveTodoList.php");

function viewRemoveTodoList()
{
    echo "Menghapus TODOLIST" . PHP_EOL;

    $pilihan = input("Nomor");

    if ($pilihan == "Exit") {
        //membatalkan
        echo "Batal menambahkan todolist" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Berhasil menghapus todolist $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus todolist" . PHP_EOL;
        }
    }

}
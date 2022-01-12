<?php


namespace View{

use Helper\InputHelper;
use Service\TodolistService;

class TodolistView{

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService = $todolistService;
        }

        function showTodolist():void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah TODO" . PHP_EOL;
                echo "2. Hapus TODO" . PHP_EOL;
                echo "X. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if($pilihan == "1"){
                    $this->addTodolist();
                }else if($pilihan == "1"){
                    $this->removeTodolist();
                }else if($pilihan == "x" || $pilihan == "X"){
                    break;
                }else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }

            }
        }
        
        function addTodolist():void
        {

        }
        
        function removeTodolist():void
        {

        }



    }
}
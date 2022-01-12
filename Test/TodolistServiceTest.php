<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(){

    $tosolistRepository = new TodolistRepositoryImpl();
    $tosolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $tosolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $tosolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($tosolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist(){

    $tosolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($tosolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testRemoveTodolist(){

    $tosolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($tosolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

// testShowTodolist();
// testAddTodolist();
testRemoveTodolist();
<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistServie = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistServie);

    $todolistServie->addTodolist("Belajar PHP");
    $todolistServie->addTodolist("Belajar PHP OOP");
    $todolistServie->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}

testViewShowTodolist();
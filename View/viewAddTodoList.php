<?php

function viewAddTodoList()
{
    echo "NAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if($todo == "x" ) {
        echo "Batal nambah todo" . PHP_EOL;
    }else {
        addTodolist($todo);
    }
}

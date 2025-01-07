<?php
namespace App\enums;

enum TodoStatus:string{
    case Todo = 'todo';
    case in_progress = 'in_progress';
    case done = 'done';
}
?>

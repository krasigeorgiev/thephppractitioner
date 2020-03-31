<?php 

// 14 - PDO Refactoring and Collaborations

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';
<?php 

function connectToDb()

{
	try {

		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '7GchoHjOZtDCkr0pksVm');
	
	} catch (PDOException $e) {

		die($e->getMessage());
	}
}

function fetchAllTasks($pdo) // the function accepts an instance of our DB connection  

{
	$statement = $pdo->prepare('select * from todos'); //prepare the statement

	$statement->execute(); //execute the prepared statement

	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); // load all into memory
}
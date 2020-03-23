<?php   

function connectToDb()

{

   try {

	 	return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '7GchoHjOZtDCkr0pksVm');

	    } catch (PDOException $e) {

		    die($e->getMessage());

	    }

}

function dd($val) {

	echo '<pre>';

	die(var_dump($val));

	echo '</pre>';

}

function fetchAllTasks($pdo)

{


	$statement = $pdo->prepare('select * from todos');


	$statement->execute();


	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


}

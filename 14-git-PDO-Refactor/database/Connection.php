<?php 

class Connection
{

	public static function make()

	{

		try {

			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '7GchoHjOZtDCkr0pksVm');
			
		} catch (PDOException $e) {

			die($e->getMessage());
		}

	}

}

//$pdo = Connection::make(); //can call a method without initialization because it's static
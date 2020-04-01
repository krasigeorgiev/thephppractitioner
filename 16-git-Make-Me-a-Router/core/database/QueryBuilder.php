<?php 

class QueryBuilder

{

	protected $pdo;

	public function __construct($pdo)

	{

		$this->pdo = $pdo; 

	}

	public function selectAll($table) // the function accepts an instance of our DB connection  

	{
		$statement = $this->pdo->prepare("select * from {$table}");//prepare the statement

		$statement->execute(); //execute the prepared statement

		return $statement->fetchAll(PDO::FETCH_CLASS); // load all into memory
	}
}
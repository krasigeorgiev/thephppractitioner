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

	public function insert($table, $parameters) 
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)', 
			$table, 
			implode(', ', array_keys($parameters)),
			': ' . implode(', :', array_keys($parameters))
		   );

	

		try {

			$statement = $this->pdo->prepare($sql);

			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Whoops, something went wrong.');
		}
	}
}
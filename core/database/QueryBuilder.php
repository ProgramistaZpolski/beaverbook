<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function fetch($query)
	{
		$statement = $this->pdo->prepare($query);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function sanitize($query)
	{
		$part1 = str_replace("\"", "", $query);
		$part2 = str_replace("'", "", $part1);
		$part3 = str_replace("`", "", $part2);
		$part4 = str_replace("/", "", $part3);
		$part5 = str_replace("\\", "", $part4);
		$part6 = str_replace("<", "", $part5);
		$part7 = str_replace(">", "", $part6);
		$part8 = str_replace("?", "", $part7);
		return $part8;
	}
}

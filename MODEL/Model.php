<?php

require_once "Connector.php";

class Model {
	
	public function add_recipe($data) {
		$connector = Connector::getInstance();
		$query = "INSERT INTO recipe (id, title, id_recipe_category, ingredients, description, preparation_time, author, author_mail) 
		VALUES 
		(NULL, ?, ?, ?, ?, ?, ?, ?);";
		try
		{
			$r = $connector->prepare($query);
			$r->execute($data);
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			die();
		}
	}

	/**
	* @param $data_step : takes an array of form values and insert cooking step in the "step" table
	*/
	/*public function add_step($data_step)
	{
		$connector = Connector::getInstance();
		$query = "INSERT INTO step (id, step_order, description, id_recipe) 
		VALUES 
		(NULL, ?, ?, ?);";
		try
		{
			$r = $connector->prepare($query);
			$r->execute($data);
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			die();
		}

	}

	public function get_last_id()
	{
		$connector = Connector::getInstance();
		$query = "SELECT LAST_INSERT_ID() FROM recipe";
		try
		{
			$r = $connector->prepare($query);
			$r->execute($data);
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			die();
		}
		return ($r);
	}*/

	public function get_recipe($type)
	{
		$connector = Connector::getInstance();
		$query = "SELECT * FROM recipe WHERE id_recipe_category = $type";
		try
		{
			$r = $connector->prepare($query);
			$r->execute($data);
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			die();
		}
		return ($r); 
	}

	/**
	* @param $sql string : takes a SQL query and returns all results in an array
	* @return array
	*/
	public function get_array($sql)
	{
		$connector = Connector::getInstance();
		$query = $sql;
		try
		{
			$statement = $connector->prepare($query);
			$statement->execute();
			$array = $statement->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			die();
		}
		return ($array);
	}
}

?>
<?php

/**
	* @param $sql string : takes a SQL query, calls gat_array($sql) which returns an array, then encodes the array in JSON.
	* @return json : returns all query results in JSON.
	*/
function get_json($sql)
{
	$model = new Model();
	$var = json_encode($model->get_array($sql));
	return ($var);
}
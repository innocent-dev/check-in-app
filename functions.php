<?php
	function select($query)
	{
		/*
			param: string query
			returns an array of results
		*/
		
		global $connection;
		$resuts = $connection->query($query);
		return $resuts;
	}

	function insert($query)
	{
		return $resuts;
	}

	function update()
	{
		return $resuts;
	}

	function delete()
	{
		return $resuts;
	}
	
?>
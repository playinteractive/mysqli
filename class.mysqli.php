<?php

class mysqli_link
{
	public $mysqli = NULL;

	public function __construct($username, $password, $database, $offset = '+00:00', $charset = 'utf8mb4', $host = 'localhost')
	{
		$this->mysqli = new mysqli($host, $username, $password, $database);
		$this->mysqli->set_charset($charset);
		$this->mysqli->query("SET time_zone = '$offset'");
	}

	public function insert_id()
	{
		return $this->mysqli->insert_id;
	}

	public function query($query)
	{
		return $this->mysqli->query($query);
	}

	public function real_escape_string($str)
	{
		return $this->mysqli->real_escape_string($str);
	}
}

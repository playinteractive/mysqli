<?php

namespace MySQLiCharset;

/**
 * MysqliCharset
 */

class mysqli_link
{

	public $mysqli = NULL;

	public function __construct($hostname, $username, $password, $database, $charset)
	{
		$this->mysqli = new mysqli($hostname, $username, $password, $database);
		$this->mysqli->set_charset($charset);
	}

	public function query($query)
	{

		$result = $this->mysqli->query($query);
		return $result;
	}
}

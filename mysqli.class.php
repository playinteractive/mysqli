<?php
/**
 * @author    Playinteractive <mysqli.github@playinteractive.com>
 * @link      https://www.playinteractive.com
 * @copyright 2017 Playinteractive
 * @package    https://github.com/playinteractive/mysqli
 */

class mysqli_connect
{
    public $mysqli = NULL;

    private $options = ['host' => 'localhost', 'port' => 3306, 'persistent' => FALSE, 'charset' => 'utf8mb4', 'offset' => '+00:00'];

    function __construct($username, $password, $database, array $options = array())
    {
		
    $this->options = array_merge($this->options, $options);
    $this->mysqli = new mysqli($this->options['persistent'] ? 'p:' . $this->options['host'] : $this->options['host'], $username, $password, $database, $this->options['port']);
    $this->mysqli->set_charset($this->options['charset']);
    $this->mysqli->query("SET time_zone = '{$this->options['offset']}'");
    }

    function insert_id()
    {
        return $this->mysqli->insert_id;
    }

    function query($query)
    {
        return $this->mysqli->query($query);
    }

    function real_escape_string($str)
    {
        return $this->mysqli->real_escape_string($str);
    }
}

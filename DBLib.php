<?php

class DBClass
{
    public $db;

    private $serverName = 'localhost';
    private $userName = 'root';
    private $password = 'root';
    private$dbName = 'test1';

    public function __construct()
    {
        $this->db = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
    }

    public function returnDB()
    {
        return $this->db;
    }
}
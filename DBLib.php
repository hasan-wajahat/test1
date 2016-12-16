<?php

class DBClass
{
    // A DB class for db management, right now we are using it as a factory but later this can be used as a singleton
    // so that only one connection is made to db for each user.
    public $db;

    private $serverName = 'localhost';
    private $userName = 'root';
    private $password = 'root';     // security risk, but for test purposes I have saved the password here
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
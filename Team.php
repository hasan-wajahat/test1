<?php

include_once("./DBLib.php");

class Team{
    private $db;

    function __construct(){
        $DB = new DBClass();
        $this->db = $DB->returnDB();
    }

    function getTeamByID($id){
        $myQuery = "SELECT name FROM teams WHERE id = $id";
        $result = $this->db->query($myQuery);
        return $result;
    }
}
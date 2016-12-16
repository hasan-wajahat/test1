<?php

include_once("./DBLib.php");

class User{
    private $db;

    function __construct(){
        $DB = new DBClass();
        $this->db = $DB->returnDB();
    }

    function getAllUsers(){
        $myQuery =  "SELECT * FROM users";
        $result = $this->db->query($myQuery);
        return $result;
    }

    function getTeamByUserID($id){
        $myQuery = "SELECT team_id FROM teams_users WHERE user_id = $id";
        $result = $this->db->query($myQuery);
        return $result;
    }
}
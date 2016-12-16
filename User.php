<?php

include_once("./DBLib.php");

class User{
    var $db;

    function __construct(){
        $DB = new DBClass();
        $this->db = $DB->returnDB();
    }

    function getAllUsers(){
        $myQuery =  "Select * from users";
        $result = $this->db->query($myQuery);
        return $result;
    }
}
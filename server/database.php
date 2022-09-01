<?php
require_once('Constant.php');
require_once ('server/errors.php');


$mimi = "fgfgfgfgfgfgfgfgfgf f g";

try {
    $DB = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
}catch (Exception $e){
    //save error to session for display in exceptions.php
    saveError("server", array(
        "code" => 500,
        "header" => "Database Error",
        "message" => "Database not respond accordingly. please contact support team"
    ));
    header('location:'.BASE_URL.'exceptions.php');
}

function db(){
    try{
        return  mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    }catch (Exception $e){
        return false;
    }  
}



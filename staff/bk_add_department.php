<?php
require_once('../Constant.php');
require_once('../Sessions.php');
include('server/database.php');

$response = array();

if(isset($_POST['name'],$_POST['code'], $_POST['hod'], $_POST['description'])){
    $DB = db();
    $name= mysqli_real_escape_string($DB, $_POST['name']);
    $code = mysqli_real_escape_string($DB, $_POST['code']);
    $description = mysqli_real_escape_string($DB, $_POST['description']);
    $hod = mysqli_real_escape_string($DB, $_POST['hod']);
    try {
        //applicant signup script
        $sql = "INSERT INTO ".DB_NAME.".department(name, code, Description, hod)
                VALUES ('$name','$code','$description','$hod');";
        $run = mysqli_query($DB, $sql);
        echo $sql;
        if($run){
            $response["code"] = 200;
            $response["message"] = "New Department registered Successful";
        }else{
            $response["code"] = 403;
            $response["message"] = "Registration Fail please enter correct data";
        }
    }catch(Exception $e){
        //there are error caught while creating account
        $response["code"] = 500;
        $response["message"] = "Something went wrong while Adding Department";
    }
}else{
    $response["code"] = 400;
    $response["message"] = "Incorrect form submission";
}
echo json_encode($response);



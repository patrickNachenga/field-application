<?php
require_once("Constant.php");
include_once(BASE_PATH."server/database.php");

$response = array();

if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['contact'],
        $_POST['password'],
    )){

    $fName = mysqli_real_escape_string($DB, $_POST['firstName']);
    $lName = mysqli_real_escape_string($DB, $_POST['lastName']);
    $email = mysqli_real_escape_string($DB, $_POST['email']);
    $gender = mysqli_real_escape_string($DB, $_POST['gender']);
    $contact = mysqli_real_escape_string($DB, $_POST['contact']);
    $password = mysqli_real_escape_string($DB, $_POST['password']);
    $password = hash_hmac('sha256',"email=".$email."&password=".$password, APP_KEY);    
    $guid = md5($email.time());
    try {
        //applicant signup script
        $sql = "INSERT INTO ".DB_NAME.".applicant ( guid, email, f_name, m_name, s_name, gender, status, image, contact, password)
            values ('$guid','$email','$fName','','$lName','$gender','active','{$gender}.png','$contact','$password');";

        $run = mysqli_query($DB, $sql);
        if($run){
            //sign in if user registered successful
            $_SESSION['user'] = array(
                'guid' => $guid,
                'FName' => $fName,
                'SName' => $lName,
                'type' => 'applicant',
            );
            $response["code"] = 200;
            $response["message"] = "registered Successful! redirecting. . .";
        }else{
            $response["code"] = 403;
            $response["message"] = "Fail to signup please enter correct data";
        }
    }catch(Exception $e){
        //there are error caught while creating account
        $response["code"] = 500;
        $response["message"] = "Something went wrong while signup";
    }
}else{
    $response["code"] = 400;
    $response["message"] = "incorrect form submission";
}
echo json_encode($response);

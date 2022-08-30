<?php
require_once("Constant.php");
include_once("server/database.php");

$response = array();

if(isset($_POST['email'], $_POST['password'])){
    $email = mysqli_real_escape_string(DB, $_POST['email']);
    $password = mysqli_real_escape_string(DB, $_POST['password']);
    $password = hash_hmac('sha256',"email=".$email."&password=".$password, APP_KEY);
    try {
        $isLogin = false;

        //=========== APPLICANT LOGIN PROCESS ==============
        $sql = "SELECT * FROM ".DB_NAME.".applicant WHERE ".DB_NAME.".applicant.email = '$email' AND ".DB_NAME.".applicant.password = '$password' LIMIT 1;";
        $run = mysqli_query(DB, $sql);
        if($run and mysqli_num_rows($run) > 0){
            //applicant signed in, save session
            $user = mysqli_fetch_assoc($run);
            $_SESSION['user'] = array(
                'guid' => $user['guid'],
                'FName' => $user['f_name'],
                'SName' => $user['s_name'],
                'type' => 'applicant',
            );
            $response["code"] = 200;
            $response["message"] = "Preparing your profile ..";
            $response["redirect"] = "applicant/";
        } else {

            //=========== STUFF LOGIN PROCESS ==============
            $sql = "SELECT * FROM ".DB_NAME.".staff WHERE ".DB_NAME.".staff.email = '$email' AND ".DB_NAME.".staff.password = '$password' LIMIT 1;";
            $run = mysqli_query(DB, $sql);
            if($run and mysqli_num_rows($run) > 0) {
                //applicant signed in, save session
                $user = mysqli_fetch_assoc($run);
                $_SESSION['user'] = array(
                    'guid' => $user['guid'],
                    'FName' => $user['f_name'],
                    'SName' => $user['s_name'],
                    'type' => 'staff',
                );
                $response["code"] = 200;
                $response["message"] = "Preparing your profile ..";
                $response["redirect"] = "staff/";
            }else{
                $response["code"] = 403;
                $response["message"] = "Incorrect username or password";
            }
        }
    }catch(Exception $e){
        //there are error caught while creating account
        $response["code"] = 500;
        $response["message"] = "Something went wrong while sign in";
    }
}else{
    $response["code"] = 400;
    $response["message"] = "incorrect form submission";
}
echo json_encode($response);

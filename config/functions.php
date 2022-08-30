<?php
require_once('Constant.php');
include('server/database.php');

/**
 * @param string $userTable
 * @return array|false|void|null
 */
function userData(string $userTable){
    try{
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM ".DB_NAME.".".$userTable." WHERE ".DB_NAME.".".$userTable.".guid = '{$user['guid']}' LIMIT 1;";
        $run = mysqli_query(DB, $sql);
        if(mysqli_num_rows($run) == 0){
            //user Sedentary longed in clear his session and redirect to login page
            unset($_SESSION['user']);
            saveError("server", array(
                "code" => 403,
                "header" => "Access Dined",
                "message" => "Its Seem you Dont Have Correct Access to this page"
            ));
            header('location:'.BASE_URL.'exceptions.php');
        }else{
            return mysqli_fetch_assoc($run);
        }
    } catch (Exception $e){
        //save error to session for display in exceptions.php
        saveError("server", array(
            "code" => 403,
            "header" => "Access Dined",
            "message" => "Its Seem you Dont Have Correct Access to this page"
        ));
        header('location:'.BASE_URL.'exceptions.php');
    }

}
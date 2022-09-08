<?php
require_once('../Constant.php');
require_once('../Sessions.php');
include('server/database.php');

$response = array();
function getStaffs(){
    try {
        $DB = db();
        //applicant signup script
        $sql = "SELECT * FROM ".DB_NAME.".staff WHERE true ORDER BY ".DB_NAME.".staff.f_name ASC;";
        $run = mysqli_query($DB, $sql);
        if($run and mysqli_num_rows($run) > 0){
            $staffs = mysqli_fetch_assoc($run);
                array_map(function($staffs){
                    return array(
                        "fullName" => $staffs['f_name']." ".$staffs['s_name']
                    );
                },$staffs);
                return $staffs;
        }else{
            return array();
        }
    }catch(Exception $e){
        return array();
    }
}



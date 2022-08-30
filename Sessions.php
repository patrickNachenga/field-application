<?php
@session_start();
require_once('Constant.php');

if( !isset($_SESSION['user']) AND !isset($_SESSION['user']['guid'])){
    header('location:'.BASE_URL);
}
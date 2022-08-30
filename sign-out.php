<?php
@session_start();
require_once('Constant.php');

session_destroy();
header('location:'.BASE_URL);
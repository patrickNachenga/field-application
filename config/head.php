<?php
require_once('Constant.php');
require_once("server/database.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PTA-FIELD APPLICATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?= BASE_URL ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASE_URL ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="<?= BASE_URL ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    <script> const BASE_URL = '<?= BASE_URL ?>';</script>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
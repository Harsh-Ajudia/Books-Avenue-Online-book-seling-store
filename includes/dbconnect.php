<?php
include_once 'dbconfig.php';
$link = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($link->connect_error) {
    header("Location: ../error.php?err=Unable to connect to MySQL");
    exit();
}
?>
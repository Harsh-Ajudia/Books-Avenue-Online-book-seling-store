<?php
// Destroy session
session_start();
session_destroy();
header("Location: ../Login.php");
exit();

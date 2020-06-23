<?php
$servername = "localhost";
$username   = "lintattc_adminfurniture";
$password   = "SrjD@EBgEQe-";
$dbname     = "lintattc_furniture";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
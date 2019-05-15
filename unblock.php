<?php
include 'credentials.php';
session_start();
$conn = new mysqli($server, $user, $pass, $db);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}
//$blah = $_GET["user"];
$sql = "DELETE FROM block WHERE block.blocker=" . $_SESSION["myID"];
$result = $conn->query($sql);
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();
?>

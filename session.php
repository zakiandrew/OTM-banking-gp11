<?php 
session_start();

if(!isset($_SESSION['ID']))
{
    header('Location:index.php');
    exit();
}

$ses_id = $_SESSION['ID'];
$ses_name = $_SESSION['username'];

?>
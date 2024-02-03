
<?php
include_once 'demoRepository.php';
$id = $_GET['id'];

$strep = new demoRepository();
$strep->deletedemo($id);

header("location:indexdemo.php");
?>
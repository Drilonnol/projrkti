
<?php
include_once 'demoRepository.php';
$id = $_GET['id'];//e merr id prej url

$strep = new demoRepository();
$strep->deletedemo($id);

header("location:demos.php");
?>
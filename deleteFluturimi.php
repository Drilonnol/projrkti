<?php
include_once 'FluturimetRepozitory.php';
$id = $_GET['id'];

$strep = new FluturimetRepository();
$strep->deleteFluturimi($id);

header("location:tabelhotel.php");
?>
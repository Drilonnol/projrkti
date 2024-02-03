<?php
include_once 'hotelsRepozitory.php';


    $id = $_GET['id'];
    $strep = new HotelsRepository();
    $strep->deleteHotel($id);
    
    header("location:hotelet.php");


?>
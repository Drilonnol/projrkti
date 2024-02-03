<?php
include_once 'BiletaRepository.php';


    $id = $_GET['id'];
    $strep = new BiletaRepository();
    $strep->deleteBileta($id);
    
    header("location:Biletat.php");


?>
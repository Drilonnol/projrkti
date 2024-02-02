<?php
$myUser='Drilon';
$myEmail='drilo2020@gmail.com';
$myPass='12345678';
if(isset($_POST['submit'])){
$userName=$_POST['perdoruesi'];
$pass=$_POST['fjalkalimi'];
if( $userName==$myUser and $pass==$myPass){
setcookie('login', $userName,time()+3600);
setcookie('login', $pass,time()+3600);
header('Location:');
} else{
header('Location:njoftim.php');
}
}
?>


<?php
    require 'conectionnew.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $county=$_POST['country'];
        
        $gender=$_POST['gender'];
        $languages=$_POST['languages'];
        $language="";
        foreach($languages as $row){
            $languages =$row ;

        }

        $query="INSERT INTO tb_data3 values('','$name','$age','$email','$password','$county','$gender','$languages')";
        mysqli_query($conn,$query);
        echo"<script> alert('Suksese') </script>";

    }


?>


<!DOCTYPE html>
    <head>
        <title>WEB</title>
        <link rel="stylesheet" href="singinnew.css">
    </head>
<html>
    <body>
        <form class="" action="" method="post" autocomplete="off">
        <div class="from">
            <label for="">Emri</label><br>
            <input type="text" name="name" class="from">
            <label for="">Mosha</label><br>
            <input type="number" name="age" required value="">
            <label for="">Email</label><br>
            <input type="text" name="email" class="from">
            <label for="">Password</label><br>
            <input type="password" name="pass" class="from">
            <label for="">Shteti</label><br>
            <select name="country" id="">
            <option value="" select hidden>shteti</option>
            <option value="USA">USA</option>
            </select><br>
            <label for="">Gjinia</label> <br>
            <input type="text" name="gender" value="" > <br>
            

            <label for="">Gjuha</label><br>
            <input type="checkbox" name="languages[]" value="English">English
            <input type="checkbox" name="languages[]" value="Shqip">Shqip
            <input type="checkbox" name="languages[]" value="GJEMANISHT">Gjermanisht
            <br>
            <button type="submit" name="submit">Submit</button>
            </div>


        </form>
    </body>

</html>
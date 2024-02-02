<?php
session_start();

if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
     
    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh; 
    }
    header, footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }

    nav {
        background-color: #ddd;
        padding: 10px;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap; 
    }

    nav button {
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        background-color: #fff;
        margin-bottom: 5px; 
    }

    nav button a {
        text-decoration: none;
        color: #333;
    }


    footer {
        margin-top: auto; 
    }
</style>
</head>
<body>

<header>
    <h1>Header</h1>
</header>

<nav>
    <button><a href="indexdemo.php?page=demos">tabelaLog</a></button>
    <button><a href="indexdemo.php?page=edithotel">edithotel</a></button>
    <button><a href="indexdemo.php?page=editlog">editlog</a></button>
    <button><a href="indexdemo.php?page=hotelet">hotelet</a></button>
    <button><a href="indexdemo.php?page=regjisthotelet">regjistrimihotelit</a></button>
    <button><a href="indexdemo.php?page=tabelahotel">tabelahotel</a></button>
</nav>

<div>
    <?php
    if(isset($_GET['page'])){
        $url=($_GET['page']);
    } else {
        $url='indexdemo';
    }
    switch($url){ 
        case 'demos':
            include ('demos.php');
            break;
        case 'edithotel':
            include ('edithotel.php');
            break;
        case 'hotelet':
            include('hotelet.php');
            break;
        case 'regjisthotelet':
            include ('regjistrimihotelit.php');
            break;
        case 'tabelahotel':
            include ('tabelhotel.php');
            break;
        default:
            include ('editdemo.php');
            break;
    }
    ?>
</div>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['emri']) && !isset($_SESSION['email'])) {
    header("location: loginprovo.php");
    exit;
}

$isAdmin = ($_SESSION['email'] == 'drilo2020@gmail.com');
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

<nav>
    <button><a href="indexdemo.php?page=hotelet">Hotelet</a></button>
    <?php
    if ($isAdmin) {
        echo '<button><a href="indexdemo.php?page=tabelhotel">Tabela e Hoteleve</a></button>';
        echo '<button><a href="indexdemo.php?page=demos">Demos</a></button>';
    }
    ?>
    <button><a href="indexdemo.php?page=logout">Logout</a></button>
</nav>

<div>
    <?php
    if(isset($_GET['page'])){
        $url=($_GET['page']);
    } else {
        $url='indexdemo';
    }
    switch($url){ 
            case'logout':
                include('logout.php');
                break;
                        case'tabelhotel':
                            include ('tabelhotel.php');
                            break;
                                case'demos':
                                    include ('demos.php');
                                    break;
        default:
            include ('hotelet.php');
            break;
    }
    ?>
</div>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>

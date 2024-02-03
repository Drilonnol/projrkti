

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wizz Air</title>
    <link rel="stylesheet" href="../provoo.css">
    <link rel="stylesheet" href="style.css">
    <link rel="Website icon" href="wi7636f219-wizz-air-logo-finding-an-airline-with-pets-petrot (2).png">
</head>
<body>
<nav>
    <button><a href="indexdemo.php?page=hotelet">Hotelet</a></button>
    <?php
    if ($isAdmin) {
        echo '<button><a href="indexdemo.php?page=tabelhotel">Tabela Hotelev</a></button>';
        echo '<button><a href="indexdemo.php?page=demos">Demos</a></button>';
    }
    ?>
    <button><a href="indexdemo.php?page=biletat">Biletat</a></button>
    <button><a href="indexdemo.php?page=logout">Logout</a></button>
</nav>
<body>
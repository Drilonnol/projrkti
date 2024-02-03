<?php
session_start();

if (!isset($_SESSION['emri']) && !isset($_SESSION['email'])) {
    header("location: loginprovo.php");
    exit;
}

$isAdmin = ($_SESSION['email'] == 'drilo2020@gmail.com');

?>

<?php include_once('head2.php');?>
<style>
   
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: black;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap; 
        }

        nav button {
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border: none;
            border-radius: 10px;
            background-color: white;
            margin-bottom: 5px; 
            width: 100px;
            height: 40px;
            font-size: 15px;
        }

        nav a {
            color: black;
        }
    </style>
</head>



    <?php
    if(isset($_GET['page'])){
        $url=($_GET['page']);
    } else {
        $url='indexdemo';
    }
    switch($url){ 
          
            case'Rezervimet':
                include('Regjistrimitabel.php');
                break;
            case'logout':
                include('logout.php');
                break;
                case'biletat':
                    include('Biletat.php');
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



</body>

</html>
<?php include_once('../footer.php'); ?>
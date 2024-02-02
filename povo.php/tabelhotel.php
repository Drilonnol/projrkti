<?php

session_start();
if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}
include_once 'hotelsRepozitory.php';

$strep = new HotelsRepository();
$hotel = $strep->getAllHotels();

?>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Hotel_id</th>
                <th>Emri</th>
                <th>Vendi</th>
                <th>KohaQendrimit</th>
                <th>Qmimi</th>
                <th>Nrpersona</th>
                <th>Img</th>
                <th>Edit</th>
                <th>Shtoje</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

      

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            color: #333;
            border-radius: 3px;
        }

        div {
            margin-top: 80px;
        }
    </style>
        <?php foreach ($hotel as $hote) { ?>
            <tr>
                <td><?php echo isset($hote['id']) ? $hote['id'] : ''; ?></td>
                <td><?php echo isset($hote['Emri']) ? $hote['Emri'] : ''; ?></td>
                <td><?php echo isset($hote['Vendi']) ? $hote['Vendi'] : ''; ?></td>
                <td><?php echo isset($hote['kohaQendrimit']) ? $hote['kohaQendrimit'] : ''; ?></td>
                <td><?php echo isset($hote['Qmimi']) ? $hote['Qmimi'] : ''; ?></td>
                <td><?php echo isset($hote['Nrpersona']) ? $hote['Nrpersona'] : ''; ?></td>
                <td><?php echo isset($hote['img']) ? $hote['img'] : ''; ?></td>
                <td> <a href='edithotel.php?id=<?php echo $hote['id'] ?>'>EditHote</a></td>
                <td> <a href="regjistrimihotelit.php?page=regjistrimihotelit">ShtoHotel</a> </a></td>
                <td><a href='deletehotel.php?id=<?php echo $hote['id'] ?>'>Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</body>
</html>

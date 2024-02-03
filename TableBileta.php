<?php
    include('conectionnew.php');
    $sql = "SELECT * FROM biletat_shtohen";
    $rezultati = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Te regjistruar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .kufizimi {
      width: 80%;
      margin: 50px auto;
    }

    h2 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<div class="kufizimi">
  <h2>Regjistrimi Tabela</h2>
  <p>Te gjithe te regjistruarit</p>            
  <table border="2">
    <thead>
      <tr>
        <th>Emri</th>
        <th>Nga</th>
        <th>Deri</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
            <?php
            if (mysqli_num_rows($rezultati) > 0) {
                while ($input = mysqli_fetch_array($rezultati)) :
                    ?>
                    <tr>
                    <td><?php echo isset($input['EmriBiletes']) ? $input['EmriBiletes'] : ''; ?></td>
                        <td><?php echo isset($input['Nga']) ? $input['Nga'] : ''; ?></td>
                        <td><?php echo isset($input['Deri']) ? $input['Deri'] : ''; ?></td>
                        <td><?php echo isset($input['Data']) ? $input['Data'] : ''; ?></td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                <?php endwhile;
            } else {
                echo "<tr><td colspan='9'>Nuk ka rezultate.</td></tr>";
            }
            ?>
      
    </tbody>

  </table>
</div>

</body>
</html>
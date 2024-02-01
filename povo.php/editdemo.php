<?php
include_once('demoRepository.php');
session_start();

if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}
$id = $_GET['id'];
$strep = new demoRepository();
$demo = $strep->getdeomoById($id);


$id_error = $emri_error = $email_error = $password_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validimi i ID
    if (empty($_POST['id'])) {
        $id_error = "ID .";
    } elseif (!ctype_digit($_POST['id'])) {
        $id_error = "ID duhet te permbaje vetem numra.";
    } else {
        $id = $_POST['id'];
    }

    // Validimi i emrit
    if (empty($_POST['emri'])) {
        $emri_error = "Emri ";
    } elseif (!ctype_alpha($_POST['emri'])) {
        $emri_error = "Emri duhet te permbaje vetem shkronja.";
    } else {
        $emri = $_POST['emri'];
    }

    // Validimi i email-it
    if (empty($_POST['emaili'])) {
        $email_error = "Email.";
    } elseif (!filter_var($_POST['emaili'], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email-i nuk ka nje forma.";
    } elseif (!strpos($_POST['emaili'], '.com')) {
        $email_error = "Email-i duhet të përmbaje .com në fund.";
    } else {
        $email = $_POST['emaili'];
    }

    // Validimi i password-it
    if (empty($_POST['password'])) {
        $password_error = "Password .";
    } else {
        $password = $_POST['password'];
    }

    if (empty($id_error) && empty($emri_error) && empty($email_error) && empty($password_error)) {
        $strep->editdemo($id, $emri, $email, $password);
        header("location:demos.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="file"] {
            margin-top: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: grey;
            color: white;
            cursor: pointer;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h3>Edit Student</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="ID">ID</label>
            <input type="text" name="id" required value="<?php echo isset($demo['id']) ? $demo['id'] : ''; ?>">
            <span class="error"><?php echo $id_error; ?></span>
        </div>
        <div>
            <label for="name">Emri</label>
            <input type="text" name="emri" required value="<?php echo isset($demo['Emri']) ? $demo['Emri'] : ''; ?>">
            <span class="error"><?php echo $emri_error; ?></span>
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" name="emaili" required value="<?php echo isset($demo['Emaili']) ? $demo['Emaili'] : ''; ?>">
            <span class="error"><?php echo $email_error; ?></span>
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="text" name="password" required value="<?php echo isset($demo['Password']) ? $demo['Password'] : ''; ?>">
            <span class="error"><?php echo $password_error; ?></span>
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>

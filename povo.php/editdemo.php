<?php
include_once('demoRepository.php');

$id = $_GET['id'];
$strep = new demoRepository();
$demo = $strep->getdeomoById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h3>Edit Student</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="ID">ID</label>
            <input type="text" name="id" value="<?php echo isset($demo['id']) ? $demo['id'] : ''; ?>">
        </div>
        <div>
            <label for="name">Emri</label>
            <input type="text" name="emri" value="<?php echo isset($demo['Emri']) ? $demo['Emri'] : ''; ?>">
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" name="emaili" value="<?php echo isset($demo['Emaili']) ? $demo['Emaili'] : ''; ?>">
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="text" name="password" value="<?php echo isset($demo['Password']) ? $demo['Password'] : ''; ?>">
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>

<?php 
if(isset($_POST['editBtn'])){
    $id = $_POST['id'];
    $emri = $_POST['emri'];
    $email = $_POST['emaili'];
    $password = $_POST['password'];

    $strep->editdemo($id, $emri, $email, $password);
    header("location:demos.php");
}
?>
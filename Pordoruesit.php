<?php 

include "Lidhja.php";
include_once "PordoruesiRepository.php";

$strep = new PordoruesiRepository();
$pordoruesit = $strep->getAllPordoruesit();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>emriMbimeri</th>
                <th>email</th>
                <th>password</th>
                <th>conf   </th>
               
            </tr>
            </thead>
            <tbody>
                <?php foreach($pordoruesit as $pordoruesi) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $pordoruesi["Emri"]; ?></td>
                        <td><?php echo  $pordoruesi['Email'];?></td>
                        <td><?php echo  $pordoruesi['pass'];?></td>
                        <td><?php echo  $pordoruesi['confirmimi'];?></td>
                
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>
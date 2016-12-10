<?php
    $companyName = "MagicWeapon Company";
    $myfile = fopen("./mydata.txt", "r") or die("Unable to open file!");
?>
<html>
 <head>
  <title>Welcome to <?php print($companyName) ?></title>
 </head>
<?php 
    echo fread($myfile,filesize("./mydata.txt"));
    fclose($myfile);
 ?>
<br/>
<tr>
            <a href="./index.php">Home</a>
                </tr><br/>
</html>

<?php
    $companyName = "MagicWeapon Company";
    //$contents = file("./mydata.txt");
    $myfile = fopen("./mydata.txt", "r") or die("Unable to open file!");
    //echo fgets($myfile);
    //$imgurl = "./magicteller.jpg";
   // $image = fread(fopen($imgurl,r), filesize($imgurl));
    //header("Content-type: image/jpg",true);
    //echo $image;
?>
<html>
 <head>
  <title>Welcome to <?php print($companyName) ?></title>
 </head>
 <body>
 <li>This is company mainly sell magic tools used in the magic world like magic stick, sword and so on. Owner like the Harry Potter so much, she is kinda of got this idea of open a store to sell the unofficial materials.
magic stick, magic sword, magic ring, magic hat, Pigeon</li>
<p><strong>Comes to open session, magic weapon at sell with group price! 
</strong></p>
<img src = "./magicteller.jpg" alt = "Harry">
<p>    </p>
 <?php 
    echo fread($myfile,filesize("./mydata.txt"));
    fclose($myfile);
 ?>
 </body>
</html>

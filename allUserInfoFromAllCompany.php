<?php
  // Here is the data we will be sending to the service
  $select['select'] = '*';
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'http://www.magicweaponcompany.com/database.php?type=1');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $select);//this is request body contains the "select" key word
      
  // Send first curl request for my own database
  $result = curl_exec($curl);
	
  //second database from my teammate ritaccc  
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'http://ritaccc.com/user/allUserInfoFromAllCompany/database.php');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $select);
  $result2 = curl_exec($curl);
  
  //third database page from Di Bao
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'http://www.starrybookstore.com/account/db/user.php');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $select); 
  $result3 = curl_exec($curl);
  
  // Free up the resources $curl is using
  curl_close($curl); 
  echo $result;
  echo $result2;
  echo $result3;
?>

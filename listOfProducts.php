<title>Tracking~</title>
<tr>
            <a href="./productSection.html">back to product section</a>
                </tr><br/>
<body> 
	<?php 	
		
		foreach ( $_COOKIE as $key => $value ){
			if(ereg("count+",$key)){
				$countarray[$key] = $value;
			}else{
			        $timearray[$key] = $value;
			}
		}
		asort($timearray, SORT_REGULAR);
		$idc = 0;
		$size = sizeof($timearray);
		print("<h3>Here are your recently five visited products(you may need to refresh it):</h3><br/>");
		foreach($timearray as $key => $value){
			if($idc >= $size - 5){
			$reverse = $size-$idc;
		//	print("<td>$reverse</td><td> $key</td><br/>");
		 print("The <td>$reverse</td> ordination:[ <td> $key</td><br/>");
			}
			$idc++;
		}
		print("<br/><br/>");
		asort($countarray, SORT_REGULAR);
		$idc = 0;
		$size = sizeof($countarray);
		print("<h3>Here are your most five visited products(you may need to refresh it):</h3><br/>");
                foreach($countarray as $key => $value){
                        if($idc >= $size - 5){
                        $reverse = $size-$idc;
                        print("The <td>$reverse</td> ordination:[ <td> its click count is:</td><td>$value</td><td> $key</td><br/>");
                        }
                        $idc++;
                }

	?>
 </body>
		
		

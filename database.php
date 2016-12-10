<head> 
<title> List search result</title>
</head>
<body style="font-family:arial, sans-serif" style="backgroud-color:#DA5C5E">
<?php
      //echo "<h2> users section</h2>";
      //echo "<div>Name: Miao_Wang</div>";
      //echo "<div>SID: 011499202</div>";
      //echo "<div>Website: <a href= "../../../\">ritaccc.com</a ></div>";
	extract($_POST);
	if($_GET['type'] == 2){
		if($userID!='' and $firstName!=''and $lastName!=''and $email!=''and $homeAddress!='' and $homePhone!='' and $cellPhone !=''){
			$query ="INSERT INTO user (`userID`, `firstName`, `lastName`, `email`, `homeAddress`, `homePhone`, `cellPhone`) VALUES ('".$userID."','".$firstName."','".$lastName."','".$email."','".$homeAddress."','".$homePhone."','".$cellPhone."')";
		}
			
	}else if($_GET['type']==1){
		//build select query here
		if($INFO == ""){
			$query = "SELECT ".$select."	FROM user";
			}else{
				$query = "SELECT * FROM user WHERE ".$select."='".$INFO."'";//$info should be added the '' single quotation
			}
	}
	
	//connect to mysql
	if( !( $database = mysql_connect( "localhost","root","2016") ) )
		die( "Could not connect to database");
	
	//open the cpme272 database
	if( !mysql_select_db( "magicWeapon", $database) )
		die( "Could not open cmpe272 database");
	
	//query cmpe272 database
	if( !( $result = mysql_query( $query, $database) ) ){
		print("can not execute query!<br />");
		die( mysql_error());
	}
	?>
	
    <h3 style="color:blue">
    User section from     Miao Wang  -  011499202</h3>
    
    <table border="1" cellpadding="3" cellpadding="2"
    style="background-color:#DF7C7D">
    <?php
		extract($_POST);
		if($_GET['type'] == '1'){
			//fetch esch record if result set
     // echo "<h2> users section</h2>";
     // echo "<div>Name: Miao_Wang</div>";
     // echo "<div>SID: 011499202</div>";
			for( $counter = 0; 
			$row = mysql_fetch_row($result);
			$counter ++){
				print("<tr>");
				
				foreach( $row as $key =>$value)
					print("<td> $value</td>");
				print("</tr>");
			}
		}else if($_GET['type']=='2'){
			print("insert success and you can back to the view database page to see your insert is success add to database");
		}
		
		mysql_close($database);
		?>
  </table>
<br />Your search yielded<strong>
<?php print( "$counter")?>result.<br /><br /></strong>
<input type="button" value="Back" onclick="history.back(-1)" />
<h5> Please email to comments to
	<a href="maiilto:delete@delete.com">mia and satile, Inc.</a>
</h5>
</body>

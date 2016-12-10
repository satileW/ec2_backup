<head>
<?php
	extract($_POST);
	
	//check if user has left username & userpassword
	if(!$USER || !$PASSWORD){
		filedsBlank();
		die();
		}
	if( !( $file = fopen("admin.txt","r") ) ){
		print( "<tile>ERROR</title></head>");
		die();
	}
	$userVerified = 0;
	while( !feof($file) && !$userVerified ){
		$line = fgets($file, 255);
		$line = chop($line);
		$field = split(",",$line,2);
		if( $USER == $field[0] ){
			$userVerified = 1;
			if( checkPassword( $PASSWORD, $field ) == true )
				accessGranted($USER);
			else
				wrongPassword();
		}				
	}
	fclose($file);
	if( !$userVerified )
		accessDenied();	
	
	function checkPassword($username, $filedata){
		if( $username ==  $filedata[1] )
			return true;
		else
			return false;
	}
	function accessGranted($name){
		print("<title> thank you </title></head><body><a href=\"security.php\">see your client</a></body><input type=\"button\" value=\"Back\" onclick=\"history.back(-1)\" />");
	}
	function wrongPassword(){
		print("<title>Access denied</title><body style = \"font-family: arial;font-size: 1em; color: red\"> <strong>You entered an invalid password.<br /> Access has been denied.</strong><input type=\"button\" value=\"Back\" onclick=\"history.back(-1)\" />" );
	}
	function accessDenied(){
		print("<title> Access Denied</title></head><body style = \"font-family: arial; font-size: 1em; color: red\"><strong> You were denied access to this server.<br /></strong> <input type=\"button\" value=\"Back\" onclick=\"history.back(-1)\" />" );
	}
	function filedsBlank(){
		print( "<title>Access Denied</title> </head>
		<body style=\"font-family: arial;font-size: 1em; color: red\">
		<strong>
		please fill in all form fields.
		<br /></strong><input type=\"button\" value=\"Back\" onclick=\"history.back(-1)\" />" );
	}
	
?>

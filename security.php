<input type="button" value="Back" onclick="history.back(-1)" /><textarea rows="10" cols="50" onclick="this.focus();this.select()">
<?php
echo fread(fopen("./security.txt",'r'),filesize("./security.txt"));
?>
</textarea>
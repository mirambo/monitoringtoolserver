      <?php 
	$connection= mysqli_connect("localhost","root","");
		if(!$connection){
			die("Connection failed: " .mysqli_error());
		} 
		
	$db = mysqli_select_db($connection,"monitoring");
		if(!$db){
			die("Database failed: " .mysql_error());
			} 

?>
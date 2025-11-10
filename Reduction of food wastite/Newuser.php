
<?php
include('header.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<br>
<table>
<tr>
<td>
<h3>New Seeker Register Here</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	
	

	<tr>
		<td class="col" style="color: #000000">User ID:</td>
		<td><input type="text" name="t1" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Password:</td>
		<td><input type="password" name="t2" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Name:</td>
		<td><input type="text" name="t3"  value=""  style="color: #000000" /></td>
	</tr>
	<tr>
		<td class="col"  style="color: #000000">Address:</td>
		<td><input type="text" name="t4" value=""  style="color: #000000" class="required"  /></td>
	</tr>
		

	<tr>
		<td class="col"  style="color: #000000"  >Mobile:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="t5" value="" style="color: #000000" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Email:</td>
		<td><input type="text" name="t6" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	

	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>


	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `seeker`"; 
	$query .= " VALUES ('".$_POST['t1']."', '".$_POST['t2']."','".$_POST['t3']."', '".$_POST['t4']."', '";
	$query .=  $_POST['t5']."', '";
	$query .= $_POST['t6']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Newuser.php");
//	exit;
 
 }

?>

<?php


include('footer.php');
?>
 


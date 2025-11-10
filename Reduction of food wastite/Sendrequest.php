
<?php
include('Userheader.php');
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
<h3>Send Request</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	
	

	<tr>
		<td class="col" style="color: #000000">Client id:</td>
		<td><input type="text" name="t1" value="<?php  echo $_SESSION['login_user']; ?>"  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Request:</td>
		<td><input type="text" name="t2" value=""  style="color: #000000" class="required" /></td>
	</tr>
	
	


	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Send"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1>Request Details</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Id</font></th>
			<th bgcolor=Black><font color=white size=2>Client Id</font></th>
			<th bgcolor=Black><font color=white size=2>Request</font></th>
			<th bgcolor=Black><font color=white size=2>Status</font></th>
			
			  
	</tr>
	
	<?php
	
	$query = "select * from Request where Clientid='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Clientid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Request']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Status']; ?></font></td>
		
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

			 	         		
	$query = "INSERT INTO `Request`"; 
	$query .= " VALUES ('null','".$_POST['t1']."', '".$_POST['t2']."','Pending')";
         
		//  echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
header("location:Sendrequest.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from caseschdeule where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Sendrequest.php");
	exit;
	}
include('footer.php');
?>
 


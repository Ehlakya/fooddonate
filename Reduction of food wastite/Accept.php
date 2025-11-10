
<?php
include_once("config.php");
include('Userheader.php');
error_reporting(0);

$query2 = "select * from request where id=".$_GET['Add']."";
		//	echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
		}	

?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#Order_form").validate();
  });
</script>
<form action="" name="register"  id="register" method="post">
	</br>	</br>	</br>	</br>
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="Silver" class="displaycontent"  width="400" height="120">
	<caption></caption>
	
	<center>
	<tr>
		<th colspan="2" style="color: #000000">Accept Request</th>
		<br>
	<tr>
	</center>
	<tr>
		<td class="col" style="color: #000000">Donate Id:</td>
		<td><input type="text" name="t1"  value="<?php echo $row['id'] ?>"  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col">Status:</td>
		<td><select name="Roll">
    <option value="Accept">Accept</option>
    <option value="Reject">Reject</option>
   
</select>
</td>
	</tr>

		
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Send Here"  style="color: #000000"/>
		     
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>


<?php

 //include_once("config.php");  



 if(isset($_POST['register']))
	 {
	 	         		       
		 	         		
	$query = "Update request set Status='".$_POST['Roll']."' where id='".$_POST['t1']."'";
         
	//	echo $query;
	if(mysql_query($query))
		{
		
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
		}
	else
		{
		echo 'NOT REGISTERD';
		}
header("location:Viewrequestdonor.php");


	
//exit;
 
 }

?>

<?php
include('footer.php');
?>
 


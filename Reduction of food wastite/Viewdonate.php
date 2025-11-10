
<?php
include('Seekerheader.php');
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
<h1>Donate Details</h1>
</td>
</tr>

</table>

	
	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>id</font></th>
			<th bgcolor=Black><font color=white size=2>Donorid</font></th>
			<th bgcolor=Black><font color=white size=2>Donorname</font></th>
			<th bgcolor=Black><font color=white size=2>Food</font></th>
			<th bgcolor=Black><font color=white size=2>Dateoffood</font></th>
			<th bgcolor=Black><font color=white size=2>Qty</font></th>
			<th bgcolor=Black><font color=white size=2>Location</font></th>
				<th bgcolor=Black><font color=white size=2>Select</font></th>
			
			
			  
	</tr>
	
	<?php
	
	$query = "select * from addfood";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Donorid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Donorname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Food']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Dateoffood']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Qty']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Location']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="Sendreq.php?Add=<?php echo $row['id'];?>">Select</a></font></td>
			
		
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>



<?php


include('footer.php');
?>
 


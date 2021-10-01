<?php 

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'restaurant1');

$select="SELECT * FROM `menu1`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_assoc($result)){
?>
<table>
	<tr>
	<td><?php echo $res['id']?></td>
	<td><?php echo $res['Name']?></td>
	<td><?php echo $res['Price']?></td>
	<td><?php echo $res['code']?></td>
</tr>
</table>

<br>
<?php 
}
?>
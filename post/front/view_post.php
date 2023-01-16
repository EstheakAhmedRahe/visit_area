<?php
include('configpost.php');
session_start();
echo $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	header("location:login.php");
	die();
}



$user = $_SESSION['email'];

$query = mysqli_query($conn,"select * from user_login where email = '$user'");
$rowr =mysqli_fetch_array($query);
$id = $rowr['email'];


$query1 = mysqli_query($conn,"select * from product where email = '$id'");
$result = mysqli_num_rows($query1);

 ?>
 <center>
<h1>User Post </h1>
</center>
<hr>
<center>
 <br><br>


 <table  border="1px">
 	<tr>
 		<td>itle</td>
 		<td>Content</td>
 	</tr>

 	<?php 
    for($i=1; $i<=$result;$i++)
  {
     $row =  mysqli_fetch_array($query1)
 	?>




 	<tr>
 		<td><?php  echo $row['pname']?></td>
 		<td><?php  echo $row['email']?></td>
		 <td><?php  echo $row['prize']?></td>
		 <td><?php  echo $row['picture']?></td>
 	</tr>
 <?php } ?> 
 </table>

</center>
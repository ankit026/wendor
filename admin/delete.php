<?php session_start();
require('../includes/config.php');
include("includes/head.inc.php");
if($_SESSION["login"]!=1)
	header("location:../index.php");
?>

<html>
<body>
<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">Deleted successfully ..</font>';
												echo '<br><br>';
											}
										
										?>

<table cellspacing="7">
                            <tr id="r1" style="color:white;background-color:black;">
                                <th>Sr No.</th> 
                                <th title="Product Name">P. Name</th>
                                <th>Price</th>
                                <th>Delete</th>
                            </tr>
							<?php 
							$query="select * from item";
							$res=mysqli_query($conn,$query) or die("wrong query");
							$n=1;
							while($row=mysqli_fetch_assoc($res)){
							if($n%2)
							echo "<tr style='background-color: #f1f1f1;color: #9999ff;'><td>".$n."</td><td>".$row['name']."</td><td>".$row['price']."</td><td><a href='pdelete.php?id=".$row['id']."' >delete</a></td></tr><br>";
							else
							echo "<tr style='background-color: #e1dae2;color: darkgoldenrod;'><td>".$n."</td><td>".$row['name']."</td><td>".$row['price']."</td><td><a href='pdelete.php?id=".$row['id']."' >delete</a></td></tr><br>";
							$n++;
							}
							?>
							</table>
							<br>
							<button onclick="document.location.href='home.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">back</button>
		
							

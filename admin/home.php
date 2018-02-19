<?php session_start();

require('../includes/config.php');
include("includes/head.inc.php");

if($_SESSION["login"]!=1)
	header("location:../index.php");
?>

<html >


<body>
<button onclick="document.location.href='alogout.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">logout</button>
		
<div>
<h1 class="title">Welcome  
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['name']; 
								}
								else
								{	
									echo 'to store';
								}
							?>
							</h1>
							
		</div>
		<button onclick="document.location.href='insert.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">Insert</button>
		<button onclick="document.location.href='update.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">Update</button>
		<button onclick="document.location.href='delete.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">Delete</button>
	
	</body>
</html>

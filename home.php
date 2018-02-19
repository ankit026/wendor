<?php session_start();

require('includes/config.php');
include("includes/head.inc.php");
if($_SESSION["login"]!=2)
	header("location:index.php");
?>
<html >


<body>
<button onclick="document.location.href='ulogout.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">logout</button>

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
	</body>
</html>

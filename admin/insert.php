<?php
session_start();

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
												echo '<font color="blue">Inserted successfully ..</font>';
												echo '<br><br>';
											}
										
										?>
 <form action="./upproduct.php" method="post" enctype="multipart/form-data">
                        <table style="height: 220px;width: 400px;margin-left: 280px;font-size: 20px;margin-top: 90px;">
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" name="pname" required="" style="height: 25px;"/></td>
                            </tr>
                         
                             <tr>
                                <td>Product Price</td>
                                <td><input type="text" name="pprice" required="" style="height: 25px;"/></td>
                            </tr>
                             <tr>
                                <td>Product Pic</td>
                                <td><input type="file" name="image" style="height: 25px;"/></td>
                            </tr>
                            <tr>
                                <br><br><td colspan="2" align="center"><input type="submit" value="Submit" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;"></td>
                            <button onclick="document.location.href='home.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;">back</button>
		
							</tr>
                        </table>
						
                    </form>
			</body>
			</html>
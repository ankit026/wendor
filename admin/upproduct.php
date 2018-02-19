<?php
require('../includes/config.php');

 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
	  $file_tmp = $_FILES['image']['tmp_name'];
      #$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	  #$expensions= array("jpeg","jpg","png");
      
     # if(in_array($file_ext,$expensions)=== false){
      #   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      #}
      
     
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
 }
$pname=$_POST['pname'];
#$pid=$_POST['pid'];
#static $pid=100;
			$pprice=$_POST['pprice'];
			
			
						
			$query="insert into item values('$pname','','$pprice','$file_name')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:insert.php?ok=1");
			
			
			?>
<?php

require('../includes/config.php');
$did=intval($_GET['id']);

$query="DELETE FROM item WHERE id=$did";
echo $query;

mysqli_query($conn,$query) or die("Can't Execute Query...");
header("location:delete.php?ok=1");
?>
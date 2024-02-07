<?php
require 'conn.php';
$id=$_GET['id'];
$sql="DELETE FROM souspro Where id='$id'" ;
$query=mysqli_query($conn,$sql);
if(isset($query)){ 
   header("location:nav.php");
}
?>
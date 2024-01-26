<?php
  if(isset($_POST['titre'])){
    $titre=$_POST['titre'];}
else{
    $titre="";
}
if(isset($_POST['description'])){
    $description=$_POST['description'];}
else{
    $description="";
}
if(isset($_POST['image'])){
    $image=$_POST['image'];}
else{
    $image="";
}

require 'conn.php';
$requete="INSERT INTO souspro (`titre`, `description`, `image`) VALUES (' $titre', ' $description', '  $image')";
$query=mysqli_query($conn,$requete);
if(isset($query)){
    echo "<h1> insertion avec succ</h1>";
}
else{
    echo "<h1> erreur  insertion </h1>";
}

?>
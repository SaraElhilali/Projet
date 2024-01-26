<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau Bootstrap</title>
  <!-- Ajouter le lien CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUcaksR6PL" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
  <table border="1" >
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     
      <?php
                  require 'conn.php';
                  $requete="SELECT * from souspro";
                  $query=mysqli_query($conn,$requete);
                  while($rows=mysqli_fetch_assoc($query)){ 
                     $id=$rows['id'];
                    echo "<tr>";
                    echo "<td>{$rows['image']}</td>";
                    echo "<td>{$rows['titre']}</td>";
                    echo "<td>{$rows['description']}</td>";
                    echo "<td class='bouton-container'>";
                    echo "<a href='modifier.php?id=".$id."' class='ajouter-btn1'>Modifier</a>";
                    echo "<a href='supp.php?id=".$id."' class='ajouter-btn2'>Supprimer</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                  
                ?>
    </tbody>
  </table>
</div>

<!-- Ajouter le script Bootstrap JS (optionnel, mais nécessaire pour certaines fonctionnalités) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-rbsr5zQ8PTIcpNQ6HvBNp8aUpQzS/4SHzNRj12HJ6eVM4yP1fYVhHATtExlKswEA" crossorigin="anonymous"></script>

</body>
</html>

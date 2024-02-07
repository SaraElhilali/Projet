<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Page Bootstrap</title>
  <style>
   .carousel-item{
    height:90vh;
    min-height : 40px;
    background : no-repeat scroll center scroll ;
    -webkit-background-size : cover ;
    background-size:cover;
   }
   .carousel-item::before{
    content:"";
    display:block;
    position:absolute;
    top:0;
    left:0;
    bottom:0;
    right:0;
    background: #000;
    opacity:0.7;}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">CuisinArtiste</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recettes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">À Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pizza2.jpg" class="d-block h-100    w-100 " alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="pizza1.jpg" class="d-block h-100    w-100 " alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="plat.jpg" class="d-block h-100   w-100   " alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
  <div class="container mt-4">
    <div class="row">
        <?php
        require 'conn.php';
        $requete = "SELECT * FROM souspro"; 
        $query = mysqli_query($conn, $requete);

        while ($rows = mysqli_fetch_assoc($query)) {
            echo "<div class='col-md-4'>";
            echo "<div class='card'>";
            echo "<img src='" . htmlspecialchars($rows['image']) . "' class='card-img-top' alt='Image de la carte'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . htmlspecialchars($rows['titre']) . "</h5>";
            echo "<p class='card-text'>" . htmlspecialchars($rows['description']) . "</p>";
            echo "<a href='#' class='btn btn-primary'>En savoir plus</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>
   <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 CuisinArtiste. Tous droits réservés.</p>
  </footer>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
 
<?php
require 'conn.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $requete = "SELECT * FROM souspro WHERE id = " . $id;
    $query = mysqli_query($conn, $requete);

    if ($query) {
        $row = mysqli_fetch_assoc($query);

      
        echo "<form method='POST' action='aff.php' style='max-width: 300px; margin: auto;' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='id' value='" . $id . "'>";
        echo "<label for='image'>Image:</label>";
        echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Existing Image' style='max-width: 100%; height: auto;'>";
        echo "<input type='hidden' name='image' value='" . htmlspecialchars($row['image']) . "'><br>";
        echo "<label for='titre'>Titre:</label>";
        echo "<input type='text' name='titre' value='" . htmlspecialchars($row['titre']) . "' required style='width: 100%; padding: 8px; margin-bottom: 10px;'><br>";
        echo "<label for='description'>Description:</label>";
        echo "<textarea name='description' required style='width: 100%; padding: 8px; margin-bottom: 10px;'>" . htmlspecialchars($row['description']) . "</textarea><br>";


        echo "<button type='submit' style='background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;'>Enregistrer les modifications</button>";
        echo "</form>";

    } else {
        echo "Erreur lors de la récupération des données.";
    }
} else {
    echo "Identifiant non fourni.";
}
?>

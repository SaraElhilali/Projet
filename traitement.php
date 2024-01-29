
<?php
// Connexion à la base de données (remplacez ces valeurs par les vôtres)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    // Vérifier si un fichier a été téléchargé avec succès
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Dossier de destination pour l'image (assurez-vous d'avoir les permissions d'écriture)
        $uploadDir = "/projet/images/image.jpg";
        // Nom du fichier
        $fileName = basename($_FILES["image"]["image.jpg"]);
        // Chemin complet du fichier sur le serveur
        $uploadPath = $uploadDir . $fileName;

        // Déplacer le fichier téléchargé vers le dossier de destination
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadPath)) {
            // Enregistrez le chemin du fichier dans la base de données
            // $sql = "INSERT INTO souspro (`titre`, `description`,'/xampp/htdocs/projet/souspro/image.jpg') VALUES (' $titre', ' $description','$uploadPath')";
            $sql = "INSERT INTO souspro (`titre`, `description`, `image`) VALUES ('$titre', '$description', '$uploadPath')";
            if ($conn->query($sql) === TRUE) {
                echo "L'image a été enregistrée avec succès dans la base de données.";
            } else {
                echo "Erreur lors de l'enregistrement de l'image dans la base de données : " . $conn->error;
            }
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Aucun fichier image n'a été téléchargé ou une erreur s'est produite.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
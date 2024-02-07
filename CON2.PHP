<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $uploadPath = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $uploadPath .$fileName;
   if ( move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/')){    
        $sql = "INSERT INTO souspro (titre, description, image) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $titre, $description, $fileName);

            if ($stmt->execute()) {
                echo "Image uploaded and data inserted successfully!";
            } else {
                echo "Error executing SQL query: " . $stmt->error;
            }

            $stmt->close();
        } 
    } 
}
$conn->close();
?>


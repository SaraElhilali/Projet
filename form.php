

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Bootstrap</title>
    <!-- Ajoutez ici des liens vers les fichiers CSS Bootstrap si nécessaire -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style> 
 body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding:0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 50px 70px 50px ;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
        flex-direction: column; /* Pour aligner les éléments verticalement */
         align-items: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 17px;
        }

        input ,textarea{
            width: 110%;
            padding: 8px;
            margin-bottom: 6px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           
        }
     
        button {
            width: 100%;
         
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: auto;
              margin-right: auto;
              font-size: 17px;
        }

        button:hover {
            background-color: #808080;
        }
  </style>
  </head>
<body>
<form action="CON2.php" method="POST" enctype="multipart/form-data">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required>

    <label for="description">Description :</label>
    <textarea id="description" name="description" required></textarea>

    <label for="image">Ajouter un fichier :</label>
    <input type="file" id="image" name="image" required>

    <button type="submit" class="bou">Valider</button>
</form>


<!-- Ajoutez ici des liens vers les fichiers JavaScript Bootstrap si nécessaire -->
<!-- Ajoutez ici des liens vers les fichiers JavaScript Bootstrap si nécessaire -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

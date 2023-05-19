<?php
// Appeler le fichier de la connexion php
// Utiliser include
include "db.php";
// Variable pour appeler la fonction connexion db()
$con = connexiondb();
// Faire la requête
// Création de la variable requête et on y fait une requête sql
$requete = 'SELECT * FROM utilisateur';
// On souhaite avoir la réponse de la requête dans une variable
// Attention on n'est pas encore co à la bdd
// On crée la variable "$response" et on se co à la bdd
$response = $con->query($requete);
// On récupère toutes les lignes de la requête
$lignes = $response->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- CSS ONLY -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1 class="text-center mt-4 mb-4">Utilisateurs de la BDD</h1>
    </div>
    <div class="text-center mt-4 mb-4">
        <a href="add.php"><button class="btn btn-success">Ajouter</button></a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Boucle for each pour afficher chaque ligne de la requête
    foreach ($lignes as $ligne) {
        echo
    '<tr>
      <th scope="row">'.$ligne['id'].'</th>
      <td>'.$ligne['nom'].'</td>
      <td>'.$ligne['prenom'].'</td>
      <td><button class="btn btn-warning">Modifier</button></td>
      <td><button class="btn btn-danger">Supprimer</button></td>
    </tr>';
    }
    ?>
  </tbody>
</table>
</body>
</html>
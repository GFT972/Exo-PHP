<?php
// Appeler le fichier de connexion
include 'db.php';
// On crée la variable de connexion
$con  = connexionDB();
if(isset($_POST['nom'], $_POST['prenom'])){
    $nom  = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    //On prépare la requête
    $requete = $con ->prepare('INSERT INTO utilisateur(nom,prenom) VALUES (?,?)');
    // On exécute la requête
    $requete->execute(array($nom,$prenom));
    // Pour revenir sur l'affichage
    header('location:affiche.php');
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="nom">Nom utilisateur</label>
        <input type="text" name="nom">
        <label for="prenom">Prénom utilisateur</label>
        <input type="text" name="prenom">
        <input type="submit">
        <a href="affiche.php">Retour</a>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Planning club de tennis</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="nom">Nom : </label>
        <input name="nom" id="nom" type="text" required>

        <label for="prénom">Prénom : </label>
        <input name="prénom" id="prénom" type="text" required>

        <label for="motDePasse">Mot de passe : </label> <!-- faire une slice -->
        <input name="motDePasse" id="motDePasse" type="password" required>

        <label for="typeRequête">Insérer dans la bdd : </label>
        <input name="typeRequête" id="typeRequête" type="checkbox">

        <label for="entraîneur">Entraîneur : </label>
        <input name="entraîneur" id="entraîneur" type="checkbox">

        <label for="admin">Admin : </label>
        <input name="admin" id="admin" type="checkbox">

        <input type="submit" value="Envoyer">
    </form>

    <?php require 'inc/connexion.php';?>
</body>
</html>

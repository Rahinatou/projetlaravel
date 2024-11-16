<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.CSS">
    <title>Page d'inscription</title>
    <style>
        form {
    border-collapse: collapse;
    width: 30%;
    border: 3px solid whitesmoke;
    padding: 50px;
    margin: 50px auto;
    top: 25px;
    background-color: rgb(15, 108, 148);
    border-radius: 15px; /* Pour une bordure arrondie */
}

input {
    background-color: rgb(240, 240, 240);
    font-style: normal;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    margin-left: 5px;
    width: 90%;
    padding: 7px;
    border-radius: 5px; /* Ajouter des bords arrondis aux champs de saisie */
}

h2 {
    text-align: center;
    margin-top: 10px;
    color: #fff; /* Ajout de couleur pour le titre */
}

#register {
    border: 3px solid black;
    cursor: pointer;
    padding: 10px;
    margin-left: 15px;
    font-weight: bold;
    font-size: large;
    margin-bottom: 10px;
    background-color: #0f6c94; /* Change le fond du bouton */
    color: white;
    border-radius: 5px; /* Ajouter des coins arrondis au bouton */
    transition: background-color 0.3s ease;
}

#register:hover {
    background-color: #3eb1c8; /* Couleur de fond lors du survol */
}

a {
    color: rgb(15, 108, 148);
    font-weight: bold;
    text-decoration: none;
}

a:hover {
    text-decoration: underline; /* Lien avec soulignement au survol */
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre pour le formulaire */
}

h2 {
    color: white; /* Pour que le titre soit bien visible */
    font-size: 24px;
    margin-bottom: 20px;
}

    </style>
</head>
<body>
<form method="POST" action="inscription.php">
    <h2>Formulaire d'inscription</h2>
    <input type="text" name="Username" id="use" placeholder="Choisissez un nom d'utilisateur" required><br><br>
    <input type="password" name="motpass" id="mp" placeholder="Choisissez un mot de passe" required><br><br>
    <input type="submit" name="inscrire" value="S'inscrire" id="register">
</form>

<?php
require_once("utilconnect.php");

if (isset($_POST["inscrire"])) {
    $Username = $_POST['Username'];
    $motpass = $_POST['motpass'];

    // Création d'une instance de UserService
    $userService = new UserService();

    // Inscription de l'utilisateur
    if ($userService->inscrire($Username, $motpass)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Erreur lors de l'inscription. Le nom d'utilisateur est peut-être déjà pris.</p>";
    }
}
?>
</body>
</html>

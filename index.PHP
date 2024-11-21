<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page de connexion</title>
    <style>
        /* Styles pour le formulaire */
form {
    border-collapse: collapse;
    width: 30%;
    padding: 50px;
    margin: 50px auto;
    background-color: rgb(15, 108, 148);
    border-radius: 10px; /* Arrondir les coins */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Ajouter une ombre */
}

/* Champs de saisie */
input {
    background-color: rgb(240, 240, 240);
    font-style: normal;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input:focus {
    outline: none;
    border-color: rgb(15, 108, 148);
    box-shadow: 0 0 5px rgba(15, 108, 148, 0.5);
}

/* Titre */
h2 {
    text-align: center;
    margin-top: 10px;
    color: whitesmoke;
}

/* Bouton de connexion */
#send {
    border: 2px solid black;
    cursor: pointer;
    padding: 10px;
    font-weight: bold;
    font-size: large;
    background-color: whitesmoke;
    color: rgb(15, 108, 148);
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
    margin-left: 12px;
}

#send:hover {
    background-color: rgb(15, 108, 148);
    color: whitesmoke;
}

/* Lien d'inscription */
a {
    color: rgb(15, 108, 148);
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    text-decoration: underline;
    color: rgb(10, 80, 120);
}

    </style>
</head>
<body>
    <form method="POST">
        <h2>Formulaire d'authentification</h2>
        <input type="text" name="Username" id="use" placeholder="Nom d'utilisateur" required><br><br>
        <input type="password" name="motpass" id="mp" placeholder="Mot de passe" required><br><br>
        <input type="submit" name="envoyer" value="Se connecter" id="send">
    </form>

    <p style="text-align: center; margin-top: 20px;">
        Pas encore inscrit ? <a href="inscription.php">S'inscrire</a>
    </p>

    <?php
    require_once("utilconnect.php");

    if (isset($_POST["envoyer"]) && $_POST["envoyer"] == 'Se connecter') {
        $Username = $_POST['Username'];
        $motpass = $_POST['motpass'];

        // Création d'une instance de UserService
        $userService = new UserService();

        // Vérification de l'utilisateur
        if ($userService->verifierUtilisateur($Username, $motpass)) {
            header("Location: dashboard.php");
            exit;
        } else {
            // Si les informations sont incorrectes, afficher un message
            echo "<p style='color: red; text-align: center;'>Nom d'utilisateur ou mot de passe incorrect.</p>";
        }
    }
    ?>
</body>
</html>

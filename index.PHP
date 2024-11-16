<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page de connexion</title>
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

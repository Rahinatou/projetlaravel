<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f6c94, #3eb1c8); /* Dégradé de fond */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: black;
        }

        /* Titre centré */
        h1 {
            color: white; /* Changer la couleur du texte en blanc */
            font-size: 24px;
            margin-top: 20px;
        }

        /* Conteneur du formulaire avec bordure */
        .form-container {
            background-color: white; /* Fond blanc */
            border: 2px solid #0f6c94; /* Bordure bleue foncée */
            border-radius: 20px;
            padding: 30px;
            width: 60%;
            max-width: 400px;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre */
        }

        /* Tableau et styles du formulaire */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        td:first-child {
            text-align: right;
            color: #333;
            padding-right: 20px;
        }

        input[type="text"],
input[type="number"],
input[type="datetime-local"],
select {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    color: #333;
    font-size: 14px;
    box-sizing: border-box; /* Assure un calcul correct de la largeur */
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="datetime-local"]:focus,
select:focus {
    border-color: #0f6c94;
    outline: none;
}

        /* Boutons d'action */
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin: 5px;
        }

        input[type="reset"] {
            background-color: #cccccc; /* Rouge */
            color: white;
        }

        input[type="submit"] {
            background-color: #0f6c94; /* Bleu foncé */
            color: white;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            opacity: 0.8;
        }

        /* Lien retour */
        .lien {
            color: white; /* Changer la couleur du lien en blanc */
            font-weight: bold;
            text-decoration: none;
            margin-top: 20px;
        }

        .lien:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    require_once('../../Modeles/coursservice.php');
    $courservice = new CoursService();
    $enseignant = $courservice->getAllEnseignants();
    $salle = $courservice->getSallesLibres();
    ?>
    <a href="../../Controlleurs/coursctrl.php?action=liste" class="lien">Liste des cours</a><br>
    <h1>Formulaire d'ajout d'un cours</h1>
    <div class="form-container">
        <form action="../../Controlleurs/coursctrl.php" method="post">
            <table style="margin: 0 auto;">
                <tr>
                    <td>Niveau</td>
                    <td><input type="text" name="niveau" autocomplete="off" required></td>
                </tr>
                <tr>
                <td>Enseignant</td>
                    <td>
                        <select name="idens" required>
                            <option value="">Sélectionner un enseignant</option>
                            <?php foreach ($enseignant as $ens): ?>
                                <option value="<?= $ens['ide']; ?>"><?= $ens['nom']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Salle</td>
                    <td>
                        <select name="idsall" required>
                            <option value="">Sélectionner une salle</option>
                            <?php foreach ($salle as $s): ?>
                                <option value="<?= $s['ids']; ?>"><?= $s['nom']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matière</td>
                    <td><input type="text" name="mat" required></td>
                </tr>
                <tr>
                    <td>Horaire</td>
                    <td><input type="date" name="horaire" required></td>
                </tr>
                <tr>
                    <td>Durée</td>
                    <td><input type="number" name="duree" required></td>
                </tr>
                <tr>
                    <input type="hidden" name="action" value="ajout">
                    <td colspan="2" style="text-align: center">
                        <input type="reset" value="Réinitialiser">
                        <input type="submit" value="Mettre à jour">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

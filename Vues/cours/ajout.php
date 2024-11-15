<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Fond gris clair */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: black;
        }

        /* Titre centré */
        h1 {
            color: rgb(15, 108, 148); /* Bleu foncé */
            font-size: 24px;
            margin-top: 20px;
        }

        /* Conteneur du formulaire avec bordure */
        .form-container {
            background-color: white; /* Fond blanc */
            border: 2px solid black; /* Bordure bleue foncée */
            border-radius: 20px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            margin-top: 20px;
        }

        /* Tableau et styles du formulaire */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            border: 1px solid rgb(180, 176, 176); /* Bordure gris clair */
            border-radius: 5px;
            background-color: rgb(180, 176, 176);
            color: black;
            font-weight: normal;
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
            background-color: rgb(180, 176, 176);
            color: black;
        }

        input[type="submit"] {
            background-color: rgb(15, 108, 148);
            color: white;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            opacity: 0.8;
        }
        .lien{
            color:  rgb(15, 108, 148);
            font-weight: bold;
            text-decoration: none;
                  }
    </style>
</head>
<body>
    <a href="../../Controlleurs/CoursCtrl.php?action=liste" class="lien">Liste des cours</a><br>
    <h1>Formulaire d'ajout d'un cours</h1>
    <form action="../../Controlleurs/CoursCtrl.php" method="post">
        <table align="center">
            <tr>
                <td>Niveau</td>
                <td><input type="text" name="niveau" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Enseignant (Identifiant)</td>
                <td><input type="number" name="idens" required></td>
            </tr>
            <tr>
                <td>Salle (Identifiant)</td>
                <td><input type="number" name="idsall" required></td>
            </tr>
            <tr>
                <td>Matiere</td>
                <td><input type="text" name="mat" required></td>
            </tr>
            <tr>
                <td>Horaire</td>
                <td><input type="datetime-local" name="horaire" required></td>
            </tr>
            <tr>
                <td>Durée </td>
                <td><input type="number" name="duree" required></td>
            </tr>
            <tr>
                <input type="hidden" name="action" value="ajout">
                <td colspan="2" style="text-align: center">
                    <input type="reset" style="background-color: red; color: white" value="VIDER">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                    <input type="submit" style="background-color: green; color: white" value="AJOUTER">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

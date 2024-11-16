<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f6c94, #3eb1c8); /* Dégradé de fond */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Conteneur principal */
        .form-container {
            background-color: #fff; /* Fond blanc */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Ombre */
            padding: 30px;
            width: 90%;
            max-width: 600px;
            box-sizing: border-box;
        }

        /* Titre centré */
        .form-container h1 {
            text-align: center;
            color: #0f6c94; /* Bleu foncé */
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Tableau et champs */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px 0;
            vertical-align: middle;
        }

        td:first-child {
            text-align: right;
            font-weight: bold;
            color: #555;
            padding-right: 15px;
            white-space: nowrap;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #0f6c94;
            outline: none;
        }

        /* Boutons */
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="reset"] {
            background-color: rgb(180, 176, 176); /* Rouge */
            color: white;
        }

        input[type="submit"] {
            background-color: rgb(10, 90, 125); /* Vert */
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        input[type="reset"]:hover {
            background-color: #c9302c;
        }

        /* Lien retour */
        .form-container a {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            color: #0f6c94;
            text-decoration: none;
            font-weight: bold;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        /* Media query pour les petits écrans */
        @media (max-width: 768px) {
            td:first-child {
                text-align: left;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <a href="../../Controlleurs/EtudiantControl.php?action=liste">Retour à la liste des étudiants</a>
        <h1>Formulaire d'ajout d'un étudiant</h1>
        <form action="../../Controlleurs/EtudiantControl.php" method="post">
            <table>
                <tr>
                    <td>Matricule</td>
                    <td><input type="text" name="matricule" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <tr>
                    <td>Sexe</td>
                    <td>
                        <select name="sexe" required>
                            <option value="">Veuillez choisir le sexe de l'étudiant</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td><input type="number" name="tel" required></td>
                </tr>
                <tr>
                    <td>Date de Naissance</td>
                    <td><input type="date" name="datenaiss" required></td>
                </tr>
                <tr>
                    <input type="hidden" name="action" value="ajout">
                    <td colspan="2" style="text-align: center">
                        <input type="reset" value="Vider">
                        <input type="submit" value="Ajouter">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

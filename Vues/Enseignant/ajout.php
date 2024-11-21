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
            color: #333;
        }

        .form-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* Ombre douce */
            padding: 40px;
            width: 90%;
            max-width: 500px;
            box-sizing: border-box;
        }

        .form-container h1 {
            text-align: center;
            color: #0f6c94;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
        }

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
        select {
            width: calc(100% - 20px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #0f6c94;
            background-color: #e6f7ff;
            outline: none;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="reset"] {
            background-color: rgb(180, 176, 176);
            color: white;
        }

        input[type="submit"] {
            background-color: #0f6c94;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #0d8aad;
            transform: scale(1.05);
        }

        input[type="reset"]:hover {
            background-color: rgb(180, 176, 176);
            transform: scale(1.05);
        }

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
            color: #0d8aad;
        }

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
        <a href="../../Controlleurs/enseignantctrl.php?action=liste" class="lien">Retour liste des enseignants</a>
        <h1>Formulaire d'ajout d'un enseignant</h1>
        <form action="../../Controlleurs/enseignantctrl.php" method="post">
            <table>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td><input type="number" name="tel" required></td>
                </tr>
                <tr>
                    <td>Sexe</td>
                    <td>
                        <select name="sexe" required>
                            <option value="">Veuillez choisir le sexe de l'enseignant</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Titre de civilité</td>
                    <td>
                        <select name="titre" required>
                            <option value="">Choisissez un titre de civilité</option>
                            <option value="M.">Monsieur</option>
                            <option value="Mme">Madame</option>
                            <option value="Ing.">Ingénieur</option>
                            <option value="Dr">Docteur</option>
                            <option value="Pr">Professeur</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><input type="text" name="adresse" required></td>
                </tr>
                <tr>
                    <td>Département</td>
                    <td><input type="text" name="departement" required></td>
                </tr>
                <tr>
                    <input type="hidden" name="action" value="ajout">
                    <td colspan="2" style="text-align: center">
                        <input type="reset" value="VIDER">
                        &nbsp;&nbsp;&nbsp;
                        <input type="submit" value="AJOUTER">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

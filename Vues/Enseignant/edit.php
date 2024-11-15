<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification Enseignant</title>
    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container */
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Titre */
        .form-container h1 {
            text-align: center;
            color: #0f6c94;
            margin-bottom: 20px;
            font-size: 26px;
        }

        /* Tableau et champs */
        .form-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-container td {
            padding: 10px 0;
            vertical-align: middle;
        }

        .form-container td:first-child {
            text-align: right;
            font-weight: bold;
            color: #555;
            padding-right: 15px;
            white-space: nowrap;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="email"],
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="number"]:focus,
        .form-container input[type="email"]:focus,
        .form-container select:focus {
            border-color: #0f6c94;
            outline: none;
        }

        /* Boutons */
        .form-container input[type="submit"],
        .form-container input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }

        .form-container input[type="submit"] {
            background-color: #0f6c94;
            color: white;
            margin-left: 10px;
        }

        .form-container input[type="reset"] {
            background-color: #e0e0e0;
            color: #333;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0d5c7f;
        }

        .form-container input[type="reset"]:hover {
            background-color: #d6d6d6;
        }

        /* Media query pour mobile */
        @media (max-width: 768px) {
            .form-container table td:first-child {
                text-align: left;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Modification d'enseignant</h1>
        <form action="../../Controlleurs/EnseignantControl.php" method="post">
            <table>
                <tr>
                    <td>Identifiant :</td>
                    <td><input type="text" name="ide" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Téléphone :</td>
                    <td><input type="number" name="tel" required></td>
                </tr>
                <tr>
                    <td>Sexe :</td>
                    <td>
                        <select name="sexe" required>
                            <option value="">Sélectionnez</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Titre :</td>
                    <td>
                        <select name="titre" required>
                            <option value="">Choisissez un titre</option>
                            <option value="M.">Monsieur</option>
                            <option value="Mme">Madame</option>
                            <option value="Ing.">Ingénieur</option>
                            <option value="Dr">Docteur</option>
                            <option value="Pr">Professeur</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Adresse :</td>
                    <td><input type="text" name="adresse" required></td>
                </tr>
                <tr>
                    <td>Département :</td>
                    <td><input type="text" name="departement" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="hidden" name="action" value="modifier">
                        <input type="reset" value="Vider">
                        <input type="submit" value="Modifier">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

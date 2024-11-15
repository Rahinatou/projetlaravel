<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification Etudiant</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(240, 240, 240);
            justify-content: center;
            align-items: center;
            height: 10vh;
            margin: 0;
        }

        /* Container du formulaire */
        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 50px;
            text-align: right;
        }

        /* Titre */
        h1 {
            color: rgb(15, 108, 148);
            font-size: 24px;
            margin-top: 20px;
        }

        /* Tableau pour aligner les champs */
        table {
            width: 100%;
            margin-top: 10px;
        }

        td {
            text-align: center;
            font-weight: bold;
            color: rgb(60, 60, 60);
        }

        /* Champs de saisie */
        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid rgb(180, 176, 176);
                   }

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            width: 20%;
            color: white;
            background-color: rgb(15, 108, 148);
        }

   </style>
</head>
<body>

    <h1>Formulaire de modification d'étudiant</h1>

    <form action="../../Controlleurs/EtudiantControl.php" method="post" >
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
            <input type="hidden" name="action" value="modifier">
            <td colspan="2">
                
                <input type="submit" value="Modification">
            </td>
        </tr>
    </table>
</form>

</body>
</html>

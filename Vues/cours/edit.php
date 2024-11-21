<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Cours</title>
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
        .form-container input[type="datetime-local"],
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
        .form-container input[type="datetime-local"]:focus,
        .form-container select:focus {
            border-color: #0f6c94;
            outline: none;
        }

        /* Boutons */
        .form-container input[type="submit"],
        .form-container input[type="reset"],
        .form-container a {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
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

        .form-container a {
            background-color: #ff6b6b;
            color: white;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0d5c7f;
        }

        .form-container input[type="reset"]:hover {
            background-color: #d6d6d6;
        }

        .form-container a:hover {
            background-color: #d9534f;
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
    <?php
    $ids = $_GET['idc'];
    require_once('../../Modeles/coursservice.php');
    $courservice = new CoursService();
    $cours = $courservice->getById($ids);
    $enseignants = $courservice->getAllEnseignants();
    $salles = $courservice->getSallesLibres();
    ?>

    <div class="form-container">
        <h1>Formulaire de modification de cours</h1>
        <form action="../../Controlleurs/coursctrl.php" method="post">
            <table>
                <tr>
                    <td>Identifiant</td>
                    <td>
                        <input type="text" name="idc" value="<?php echo $cours['idc']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Niveau</td>
                    <td>
                        <input type="text" name="niveau" value="<?php echo $cours['niveau']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Enseignant</td>
                    <td>
                        <input type="text" name="idens" value="<?php echo $cours['idens']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Salle</td>
                    <td>
                        <input type="text" name="idsall" value="<?php echo $cours['idsall']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Matière</td>
                    <td>
                        <input type="text" name="mat" value="<?php echo $cours['mat']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Horaire</td>
                    <td>
                        <input type="datetime-local" name="horaire" value="<?php echo date('Y-m-d\TH:i', strtotime($cours['horaire'])); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Durée</td>
                    <td>
                        <input type="number" name="duree" value="<?php echo $cours['duree']; ?>" step="0.5" required>
                    </td>
                </tr>
                <input type="hidden" name="action" value="modifier">
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Modifier">
                        <a href="index.php">Annuler</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification Etudiant</title>
    <style>
        /* Style global */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fbfd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container */
        .form-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 700px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Titre */
        .form-container h1 {
            text-align: center;
            color: #005a8d;
            margin-bottom: 30px;
            font-size: 28px;
        }

        /* Tableau et champs */
        .form-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-container td {
            padding: 15px 0;
            vertical-align: middle;
        }

        .form-container td:first-child {
            text-align: right;
            font-weight: bold;
            color: #333;
            padding-right: 20px;
            white-space: nowrap;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="date"],
        .form-container input[type="email"],
        .form-container select {
            width: calc(100% - 20px);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 15px;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-sizing: border-box;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="number"]:focus,
        .form-container input[type="date"]:focus,
        .form-container input[type="email"]:focus,
        .form-container select:focus {
            border-color: #005a8d;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 90, 141, 0.3);
        }

        /* Boutons */
        .form-container input[type="submit"],
        .form-container input[type="reset"] {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .form-container input[type="submit"] {
            background-color: #005a8d;
            color: white;
        }

        .form-container input[type="reset"] {
            background-color: #e4e4e4;
            color: #444;
        }

        .form-container input[type="submit"]:hover {
            background-color: #004774;
            box-shadow: 0 4px 10px rgba(0, 90, 141, 0.2);
        }

        .form-container input[type="reset"]:hover {
            background-color: #d6d6d6;
            box-shadow: 0 4px 10px rgba(150, 150, 150, 0.2);
        }

        /* Media query pour mobile */
        @media (max-width: 768px) {
            .form-container table td:first-child {
                text-align: left;
                padding-right: 0;
            }

            .form-container {
                padding: 20px;
            }

            .form-container h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<?php
    $mat = $_GET['matricule'];
    require_once('../../Modeles/Etudiantservice.php');
    $etservice= new Etudiantservice();
    $etudiant= $etservice->getbymatricule($mat);
?>
    <div class="form-container">
        <h1>Formulaire de modification d'étudiant</h1>
        <form action="../../Controlleurs/EtudiantControl.php" method="post">
            <table>
                <tr>
                    <td>Matricule</td>
                    <td><input type="text" name="matricule" value="<?php echo $etudiant['matricule']; ?>" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" value="<?php echo $etudiant['nom']; ?>" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" value="<?php echo $etudiant['prenom']; ?>" required></td>
                </tr>
                <tr>
                    <td>Sexe</td>
                    <td>
                        <select name="sexe" required>
                            <option value="">Veuillez choisir le sexe de l'étudiant</option>
                            <option value="H" <?php echo $etudiant['sexe'] == 'H' ? 'selected' : ''; ?>>Homme</option>
                            <option value="F" <?php echo $etudiant['sexe'] == 'F' ? 'selected' : ''; ?>>Femme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td><input type="number" name="tel" value="<?php echo $etudiant['tel']; ?>" required></td>
                </tr>
                <tr>
                    <td>Date de Naissance</td>
                    <td><input type="date" name="datenaiss" value="<?php echo $etudiant['datenaiss']; ?>" required></td>
                </tr>
                <tr>
                    <input type="hidden" name="action" value="modifier">
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Modifier">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

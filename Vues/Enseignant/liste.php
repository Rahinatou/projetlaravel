<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enseignants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke; /* Fond gris clair */
            color: black;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Titre centré */
        h1 {
            color: rgb(180, 176, 176); /* Bleu foncé */
            font-size: 24px;
            margin-top: 20px;
        }

        /* Message de confirmation */
        .message {
            color: green;
            font-size: large;
            margin-bottom: 20px;
        }

        /* Tableau */
        table {
            width: 90%;
            max-width: 800px;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid rgb(15, 108, 148); /* Bordure bleue */
            text-align: center;
        }

        th {
            background-color: rgb(15, 108, 148); /* En-tête bleu foncé */
            color: white;
            font-weight: bold;
        }

        td {
            background-color: white;
            color: black;
        }

        /* Boutons dans les cellules */
        input {
            background-color: rgb(15, 108, 148);
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .action-input:hover {
            background-color: rgb(10, 90, 125);
        }

        a {
            color: red;
            font-weight: bold;
            text-decoration: none;
                   }
        .lien{
            color:  rgb(15, 108, 148);
            font-weight: bold;
            text-decoration: none;
                  }
         .mo{
             color: rgb(15, 108, 148);          
             font-weight: bold;
        }
        .ret{
            padding: 10px;
             border: none;
             color: whitesmoke;
             border-radius: 10px;
             background-color:  rgb(15, 108, 148);
             font-weight: bold;
             margin: 150px 0;
             position: relative;
            left: -300px;
             }

    </style>
</head>
<body>
    <h1>Liste des enseignants</h1>
    <a href="../../Controlleurs/enseignantCtrl.php?action=form" class="lien">Ajouter un enseignant</a>
   
    <?php 
        if (isset($_GET['message'])) {
            ?>
            <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
            <?php 
        } 
    ?>

    <?php
    require_once('../../modeles/EnseignantService.php');
    $ensService = new EnseignantService();
    $enseignants = $ensService->liste();
    ?>    

    <table align="center">
        <tr>
            <th>Identifiant</th><th>Nom</th><th>Téléphone</th><th>Sexe</th><th>Titre</th><th>Email</th><th>Adresse</th><th>Département</th><th>Action</th>
        </tr>
        <?php 
        foreach ($enseignants as $ens) {
        ?>
            <tr>
                <td><?php echo $ens['ide']; ?></td>
                <td><?php echo $ens['nom']; ?></td>
                <td><?php echo $ens['tel']; ?></td>
                <td><?php echo $ens['sexe']; ?></td>
                <td><?php echo $ens['titre']; ?></td>
                <td><?php echo $ens['email']; ?></td>
                <td><?php echo $ens['adresse']; ?></td>
                <td><?php echo $ens['departement']; ?></td>
                <td>
                <a href="../../Controlleurs/enseignantctrl.php?action=editForm&ide=<?php echo $ens['ide']; ?>" class="mo"> Modifier</a>
                    <a href="../../Controlleurs/EnseignantCtrl.php?action=delete&ide=<?php echo $ens['ide']; ?>" 
                       onclick="return window.confirm('Etes-vous sûr de vouloir supprimer cet élément ?')"> Supprimer</a>
                </td>
            </tr>
        <?php 
        } 
        ?>
    </table>
        
    <a href="../../dashboard.php" class="ret">Retour au menu</a>
</body>
</html>

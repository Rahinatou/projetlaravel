<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
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

    </style>
</head>
<body>
    <h1>Liste des cours</h1>
    <a href="../../Controlleurs/CoursCtrl.php?action=form" class="lien">Ajouter un cours</a>
   
    <?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

    <?php
    require_once('../../modeles/CoursService.php');
    $coursService = new CoursService();
    $cours = $coursService->liste();
    ?>    

    <table border="1" align="center">
    <tr>
        <th>Identifiant</th><th>Niveau</th><th>Enseignant</th><th>Salle</th><th>Matière</th><th>Horaire</th><th>Durée</th><th>Action</th>
    </tr>
    <?php 
    foreach ($cours as $c) {
    ?>
        <tr>
            <td><?php echo $c['idc']; ?></td>
            <td><?php echo $c['niveau']; ?></td>
            <td><?php echo $c['idens']; ?></td>
            <td><?php echo $c['idsall']; ?></td>
            <td><?php echo $c['mat']; ?></td>
            <td><?php echo $c['horaire']; ?></td>
            <td><?php echo $c['duree']; ?></td>
            <td>
                <input form="f1" type="submit" value="Modifier" />
                <a href="../../Controlleurs/CoursCtrl.php?action=delete&idc=<?php echo $c['idc']; ?>" 
                   onclick="return window.confirm('Etes-vous sûr de vouloir supprimer ce cours ?')">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <form action="edit.php" method="post" id="f1"></form>

</body>
</html>

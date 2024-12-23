<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>
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
    <h1>Liste des étudiants </h1>
    <a href="../../Controlleurs/EtudiantControl.php?action=form" class="lien">Ajouter un etudiant</a>
   
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

    <?php
    require_once('../../Modeles/EtudiantService.php');
    $etService = new EtudiantService();
    $etudiants = $etService->liste();
    ?>    

    <table border="1" align="center">
    <tr>
        <th>Matricule</th><th>Nom</th><th>Prenom</th><th>Sexe</th><th>Telephone</th><th>Date de Naissance</th><th>Action</th>
    </tr>
    <?php 
    foreach ($etudiants as $et) {
    ?>
        <tr>
            <td><?php echo $et['matricule']; ?></td>
            <td><?php echo $et['nom']; ?></td>
            <td><?php echo $et['prenom']; ?></td>
            <td><?php echo $et['sexe']; ?></td>
            <td><?php echo $et['tel']; ?></td>
            <td><?php echo $et['datenaiss']; ?></td>
            <td>
            <a href="../../Controlleurs/EtudiantControl.php?action=editForm&matricule=<?php echo $et['matricule']; ?>" class="mo"> Modifier</a>
                <a href="../../Controlleurs/EtudiantControl.php?action=delete&matricule=<?php echo $et['matricule']; ?>" 
                   onclick="return window.confirm('Etes-vous sûr de vouloir supprimer cet élément ?')" class="sup">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
    </table>

    <a href="../../dashboard.php" class="ret">Retour au menu</a>
  </body>
</html>

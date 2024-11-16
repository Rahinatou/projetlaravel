<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Ajout de la bibliothèque Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(2, 200px);
            grid-gap: 20px;
        }
        .menu-item {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 150px;
            background-color: rgb(15, 108, 148);
            color: white;
            font-size: 1.2em;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgb(15, 108, 148);
            transition: background-color 0.3s ease;
        }
        .menu-item:hover {
            background-color: rgb(15, 108, 148);
        }
        .menu-item i {
            font-size: 2.5em; /* Taille des icônes */
            margin-bottom: 10px; /* Espacement entre l'icône et le texte */
        }
        h1 {
            text-align: center;
            margin: 50px 20px 50px 20px;
            color: rgb(180, 176, 176);
        }
    </style>
</head>
<body>

    <h1>Menu Operation</h1>

    <div class="container">
        <a href="Vues/Etudiant/liste.php" class="menu-item">
            <i class="fas fa-user-graduate"></i>
            Menu Étudiant
        </a>
        <a href="Vues/Enseignant/liste.php" class="menu-item">
            <i class="fas fa-chalkboard-teacher"></i>
            Menu Enseignant
        </a>
        <a href="Vues/Salle/liste.php" class="menu-item">
            <i class="fas fa-door-open"></i>
            Menu Salle
        </a>
        <a href="Vues/Cours/liste.php" class="menu-item">
            <i class="fas fa-book"></i>
            Menu Cours
        </a>
    </div>

</body>
</html>

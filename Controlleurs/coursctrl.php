<?php
require_once('../Modeles/Coursservice.php');
$coursService = new CoursService();

$action = isset($_GET['action']) ? $_GET['action'] : (isset($_POST['action']) ? $_POST['action'] : '');

if ($action == 'form') {
    $enseignants = $coursService->getAllEnseignants();
    $salles = $coursService->getSallesLibres();
    header("Location: ../Vues/Cours/ajout.php");
}

if ($action == 'liste') {
    header("Location: ../Vues/Cours/liste.php");
}

if ($action == 'delete') {
    $idc = $_GET['idc'];

    $coursService->delete($idc);

    header("Location: ../Vues/Cours/liste.php?message=Cours supprimé");
}

if ($action == 'ajout') {
    if (isset($_POST['niveau'], $_POST['idens'], $_POST['idsall'], $_POST['mat'], $_POST['horaire'], $_POST['duree'])) {
        $niveau = $_POST['niveau'];
        $idens = $_POST['idens'];
        $idsall = $_POST['idsall'];
        $mat = $_POST['mat'];
        $horaire = $_POST['horaire'];
        $duree = $_POST['duree'];

             $coursService->add($niveau, $idens, $idsall, $mat, $horaire, $duree) ;
            header("Location: ../Vues/Cours/liste.php?message=Cours ajouté");
            exit();
        }   else {
            echo "Erreur lors de l'ajout du cours. Veuillez réessayer.";
        }
        }  

        if ($action == 'editForm') {
            $id = $_GET['idc'];
            $salles = $coursService->getSallesLibres();
            $enseignants = $coursService->getAllEnseignants();
            header('Location: ../vues/cours/edit.php?idc=' . $id);
            exit;
            }

if ($action == "modifier") {
    if (isset($_POST['idc'], $_POST['niveau'], $_POST['idens'], $_POST['idsall'], $_POST['mat'], $_POST['horaire'], $_POST['duree'])) {
        $idc = $_POST['idc'];
        $niveau = $_POST['niveau'];
        $idens = $_POST['idens'];
        $idsall = $_POST['idsall'];
        $mat = $_POST['mat'];
        $horaire = $_POST['horaire'];
        $duree = $_POST['duree'];

        $coursService->edit($idc, $niveau, $idens, $idsall, $mat, $horaire, $duree) ;
            header("Location: ../Vues/Cours/liste.php?message=Cours modifié");
            exit;
        } 
        }



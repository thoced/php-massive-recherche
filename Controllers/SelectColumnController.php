<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require_once  '../Classes/PHPExcel.php';
require_once  '../Models/ModelHelper.php';
require_once  '../Models/ModelDbKeyWordHelper.php';

// réception du sheet sélectionné
if(isset($_POST["sheet"]))
{
    $sheetSelected = $_POST["sheet"];
}
else
{
    $errno = "Erreur dans la sélection de l'Onglet, veuillez recommencer";
    include '../Views/ErrorView.php';
    die; 
}

session_start();
$m = $_SESSION['ImportModel'];
$modelImport = unserialize($m);

// activation du sheet selectionné
$modelImport->setSelectedActiveSheet($sheetSelected);
// récupératin de la liste des Label
$listLabels = $modelImport->getLabelNamesBySheetActive();

// enregistrement de l'état de l'objet dans la session
$m = serialize($modelImport);
$_SESSION['ImportModel'] = $m;

// appel à la vue
require '../Views/SelectLabelView.php';
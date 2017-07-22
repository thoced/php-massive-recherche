<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once  '../../Classes/PHPExcel.php';
require_once  '../Models/ModelHelper.php';
require_once  '../Models/ModelDbKeyWordHelper.php';

session_start();
// reception du fichier Excel

if($_FILES['fileExcel']['error'] > 0)
{
    $errno = "Erreur de transfert du fichier à exploiter, veuillez choisir un fichier ou choisir un fichier non corrompu";
    include '../Views/ErrorView.php';
    die;
}

// reception du fichier keyword
if($_FILES['fileKeyWord']['error'] > 0)
    echo "Erreur lors du transfert (KeyWord)";

$fileExcel = $_FILES['fileExcel']['tmp_name'];

$listKeyWord = $_FILES['fileKeyWord']['tmp_name'];

// création du model d'import du fichier excel
$modelImport = new ImportModel($fileExcel);
// création du model d'import du fichier KeyWord
$modelKeyWord = new ImportDbKeyWord($listKeyWord);

// réception de la liste des sheets
$listSheets = $modelImport->getSheetNames();

// serialisatin et passage des objets dans la session
$m = serialize($modelImport);
$_SESSION['ImportModel'] = $m;

$mk = serialize($modelKeyWord);
$_SESSION['ImportDbKeyWord'] = $mk;


// appel à la vue
require '../Views/SelectSheetView.php';


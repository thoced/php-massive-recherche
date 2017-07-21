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
$modelImport = new ImportModel("../demo.xls");

// réception de la liste des sheets
$listSheets = $modelImport->getSheetNames();

// serialisatin et passage de l'objet dans la session
$m = serialize($modelImport);
$_SESSION['ImportModel'] = $m;

// appel à la vue
require '../Views/SelectSheetView.php';


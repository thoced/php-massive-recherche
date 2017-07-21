<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once  '../../Classes/PHPExcel.php';
require_once  '../Models/ModelHelper.php';
require_once  '../Models/ModelDbKeyWordHelper.php';

// réception du label sélectionné
$labelKeySelected = $_POST["labelKey"];

session_start();
// récupération de l'objet ImportModel
$m = $_SESSION['ImportModel'];
$modelImport = unserialize($m);

// récupération de la liste des textes
$listText = $modelImport->getListTextByColumn($labelKeySelected);

if($listText != null)
require '../Views/showListTextView.php';
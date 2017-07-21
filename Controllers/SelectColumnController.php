<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once  '../../Classes/PHPExcel.php';
require_once  '../Models/ModelHelper.php';
require_once  '../Models/ModelDbKeyWordHelper.php';

// réception du sheet sélectionné
$sheetSelected = $_POST["sheet"];

// activation du sheet
$modelImport->setSelectedActiveSheet($sheetSelected);


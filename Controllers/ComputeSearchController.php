<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once  '../../Classes/PHPExcel.php';
require_once  '../Models/ModelHelper.php';
require_once  '../Models/ModelDbKeyWordHelper.php';
require_once  '../Models/ModelResult.php';

// réception du label sélectionné
if(isset($_POST["labelKey"]))
{
    $labelKeySelected = $_POST["labelKey"];
}
else
{
    $errno = "Erreur dans la sélection du label, veuillez recommencer";
    include '../Views/ErrorView.php';
    die;
}

session_start();
// récupération de l'objet ImportModel
$m = $_SESSION['ImportModel'];
$modelImport = unserialize($m);

// récupération de la liste des textes
$listText = $modelImport->getListTextByColumn($labelKeySelected);

// récupération de l'objet ImportDbKeyWord
$mk = $_SESSION['ImportDbKeyWord'];
$modelKeyWord = unserialize($mk);

// récupération de la liste des mots clés
 $listKeyword = $modelKeyWord->listKeyword;
 
    if($listKeyword == null || sizeof($listKeyword) == 0)
    {
        $errno = "Aucune liste de mot clé n'a été fourni au système, aucune recherche ne peut être réalisée, veuillez recommencer";
        include '../Views/ErrorView.php';
        die;
    }

// création de la liste des résultats
$listResult = array();
$id = 0;
// compute (comparaison de la listText avec la listeKeyword
 while(($text = current($listText)) !== FALSE)
{
    foreach($listKeyword as $keyword)
    {
        if(stripos(trim($text),trim($keyword)) !==  false)
        {
            // le keyword est trouvé dans la chaine
            $result = new ModelResult();
            $result->text = $text;
            $result->keyword = $keyword;
            $result->id = key($listText);
            $listResult[$id] = $result;
            $id++;
                   
        }
    }
    next($listText);
}

// appel à la vue des résultats
require '../Views/ShowResultView.php';
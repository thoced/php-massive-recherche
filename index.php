<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


// chargement d'un fichier excel
$objPHPExcel = PHPExcel_IOFactory::load("demo.xls");

// obtention du nombre de sheet
$nbSheet = $objPHPExcel->getSheetCount();
// reception d'une liste de sheet
$listSheet = $objPHPExcel->getSheetNames();

// affichage des noms des sheet



foreach($listSheet as $nameSheet)
{
  echo $nameSheet . "<br>";
}

// lecture du premier sheet
$sheet = $objPHPExcel->getSheetByName('toto');



echo '<table border="1">';
 
// On boucle sur les lignes
foreach($sheet->getRowIterator() as $row ){
 
   echo '<tr>';
 
   // On boucle sur les cellules de la ligne
   foreach ($row->getCellIterator() as $cell) {
      echo '<td>';
      print_r($cell->getValue());
      echo '</td>';
   }
 
   echo '</tr>';
}
echo '</table>';
?>
    </body>
</html>

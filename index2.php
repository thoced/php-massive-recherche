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
require_once dirname(__FILE__) . './ModelHelper.php';

$obj = new ImportModel("demo.xls");

$listSheet = $obj->getSheetNames();

$obj->setSelectedActiveSheet("toto");

$lab = $obj->getLabelNamesBySheetActive();

if($lab != null)
{
    foreach($lab as $l)
    {
        echo "label : " . $l . "<br>";
    }
}


?>
    </body>
</html>

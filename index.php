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
        
        <h1> Massive Analyser </h1><br>
        
        Veuillez sélectionner le fichier à analyser <br>

        <form action="index2.php" methode="POST" enctype="multipart/form-data">
        <input type="file" name="file_analyser"></input>
        <input type="submit">
        </form>
        <?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';



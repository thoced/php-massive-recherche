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
    <div style="border-width: 4px;border-color:#5499c7;border-radius: 8px;border-style: solid;background-color:#eaf2f8;">
        <form action="./Controllers/SelectSheetController.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Veuillez sélectionner le fichier à analyser </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>  Fichier extraction GSM (format Excel) </td>
                <td> <input type="file" name="fileExcel"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>  Fichier de mots clés (format Texte) </td>
                <td> <input type="file" name="fileKeyWord"></td>
            </tr>
             <tr>
                <td><input type="submit" ></td>
            </tr>
        </table>
              </form>
    </div>
        <br>
        <br>
        
        <p style="color:#abb2b9;"> Programmé par THONON Cédric</p>



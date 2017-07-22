
Veuillez sélectionner l'onglet sur lesquel les recherches doivent être réalisées<br><br>
<form action="../Controllers/SelectColumnController.php" method="POST">
    
<div style="border-width: 4px;border-color:#5499c7;border-radius: 8px;border-style: solid;background-color:#eaf2f8;">
     <table width="100%">
         <tr>
             <td>Onglets : </td>
         </tr>
         <tr>
             <td>
                 <select size="10"  name="sheet">
                     <?php
                         foreach($listSheets as $sheet)
                                echo "<option value=" . $sheet . ">" . $sheet . "</option>";
                     ?>
                 </select>

             </td>
         </tr>
</table>
</div>
    <br>
<input type="submit" value="Suivant">
    

<br>
<br>
<div style="border-width: 4px;border-color:#5499c7;border-radius: 8px;border-style: solid;background-color:#eaf2f8;">
    <br>
Liste des mots clés qui seront utilisés pour la recherche:
<ul>
<?php
    foreach($listKeyWord as $keyWord)
        echo "<li>" . $keyWord . "</li>";
?>
</ul>
    
</div>
<br>
</form>
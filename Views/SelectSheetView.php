
Veuillez sélectionner l'onglet sur lesquels les recherches doivent être réalisées<br><br>
Onglets : 
<form action="../Controllers/SelectColumnController.php" type="POST">
<select name="sheet">
<?php
    foreach($listSheets as $sheet)
     echo "<option value=" . $sheet . ">" . $sheet . "</option>";
?>
</select>
    <br>    
    <input type="submit" value="Suivant">
</form>
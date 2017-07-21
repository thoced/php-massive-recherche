
Veuillez sélectionner l'onglet sur lesquel les recherches doivent être réalisées<br><br>
Onglets : 
<form action="../Controllers/SelectColumnController.php" method="POST">
<select size="10" name="sheet">
<?php
    foreach($listSheets as $sheet)
     echo "<option value=" . $sheet . ">" . $sheet . "</option>";
?>
</select>
    <br>    
    <input type="submit" value="Suivant">
</form>
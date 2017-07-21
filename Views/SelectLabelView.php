
Veuillez sélectionner le label sur lesquel les recherches doivent être réalisées<br><br>
Onglets : 
<form action="../Controllers/ComputeSearchController.php" method="POST">
<select size="10" name="labelKey">
<?php
    while($label = current($listLabels))
    {
     echo "<option value=" . key($listLabels) . ">" . $label . "</option>";
     next($listLabels);
    }
?>
</select>
    <br>    
    <input type="submit" value="Suivant">
</form>
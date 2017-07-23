
Veuillez sélectionner le label sur lesquel les recherches doivent être réalisées<br><br>
<form action="../Controllers/ComputeSearchController.php" method="POST">
<div style="border-width: 4px;border-color:#5499c7;border-radius: 8px;border-style: solid;background-color:#eaf2f8;">
     <table width="100%">
         <tr>
             <td width="15%">Sélectionner un label: </td> 
             <td widht="85%">
                 <select size="10" name="labelKey">
                     <?php
                        while($label = current($listLabels))
                        {
                         echo "<option value=" . key($listLabels) . ">" . $label . "</option>";
                         next($listLabels);
                        }
                     ?>
                 </select>

             </td>
         </tr>
</table>
</div>    
<br>    
<input type="submit" value="Suivant">
</form>
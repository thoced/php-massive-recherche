<h1 style="text-align: center;">Résultat des recherches</h1>
<br>
<a href="../index.php">Faire une nouvelle recherche</a>
<br>
<br>
<div style="border-width: 4px;border-color:#5499c7;border-radius: 8px;border-style: solid; background-color:#eaf2f8; overflow:auto;">
<table width="80%">
    <tr>
        <td><b>Indice</b></td><td><b>Contenu</b></td><td><b>Mot clé utilisé</b></td>
    </tr>
    <tr>
        <td></td><td></td><td></td>
    </tr>
    <tr>
        <td></td><td></td><td></td>
    </tr>
<?php
    foreach($listResult as $result)
    {
?>
    <tr>
        <td><?php echo $result->id; ?></td><td><?php echo $result->text; ?></td><td><?php echo $result->keyword; ?></td>
    </tr>
    
<?php
    }
?>
</table>
</div>
<br>
<br>
<a href="../index.php">Faire une nouvelle recherche</a>
<br>
<br>
 <p style="color:#abb2b9;">Massive Analyser © <br>Développé par THONON Cédric.</p> 
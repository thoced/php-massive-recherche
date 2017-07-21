<h1 style="text-align: center;">Résultat des recherches</h1>

<div style="border-width: 4px;border-color: red;border-radius: 8px;border-style: solid;">
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
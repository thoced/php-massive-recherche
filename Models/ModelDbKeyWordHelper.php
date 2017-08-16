<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImportDbKeyWord
{
    // handle du fichier
    public $handleFile;
    
    public $listKeyword;
    
    function __construct($file)
    {
        if($file == null)
            return;
       // lecture du fichier
       $this->listKeyword = file($file);

    }
    
    
    
}


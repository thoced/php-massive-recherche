<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImportModel
{
    // chargement d'un fichier excel
    
    public $phpExcel;
    
    function __construct($file)
    {
        if($file != null)
             $this->phpExcel = PHPExcel_IOFactory::load($file);
    }
    
    function getSheetNames()
    {
        // retour la liste des sheet
        if($this->phpExcel != null)
          return $this->phpExcel->getSheetNames();
    }
    
    function getSheetCount()
    {
        if($this->phpExcel != null)
            return $this->phpExcel->getSheetCount();
    }
    
    
    // retourne un tableau comprennant le nom des labels dans la premiere ligne
    function getLabelNamesBySheet($sheetName)
    {
        if($sheetName == null)
            return;
        
        $sheet = $this->phpExcel->getSheetByName($sheetName);
        if($sheet != null)
        {
                     
           $dimension = $sheet->getRowDimension(1);
           
           $listLabels = array($dimension->getRowIndex());
           
           for($i = 0;$i <= $dimension->getRowIndex() ;$i++)
           {
               $listLabels[$i] = $sheet->getCellByColumnAndRow($i,1);
           }
        }
        
        return $listLabels;
    }
    
    
}


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImportModel
{
    // chargement d'un fichier excel
    
    // phpExcel
    public $phpExcel;
    // selected sheet
    public $selectedSheet;
    
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
    
    // selectionne le sheet actif
    public function setSelectedActiveSheet($sheetName)
    {
        if($this->phpExcel != null)
             $this->selectedSheet = $this->phpExcel->getSheetByName($sheetName);

    }
    
    // retourne un tableau comprennant le nom des labels dans la premiere ligne
    public function getLabelNamesBySheetActive()
    {
        if($this->selectedSheet == null)
            return;
        
        $it = $this->selectedSheet->getRowIterator();
        $it->rewind();
        $row = $it->current();       
        $celIt = $row->getCellIterator();
        $celIt->rewind();
      
        
        $listLabels = array();
        while($celIt->valid())
        {
            
            $listLabels[$celIt->key()] = $celIt->current();
            $celIt->next();
           
        }
       
       return $listLabels;
    }
    
    // retourne la liste des text des cellules de la colone passée en parametre 
    public function getListTextByColumn($startColumn)
    {
        if($this->selectedSheet == null)
            return;
        
        //instance
        $listText = array();
        
         //$this->selectedSheet = $this->phpExcel->getSheetByName("toto");
        // je cherche à obtenirle nombre de row
         $itRow = $this->selectedSheet->getRowIterator();
         $itRow->rewind(); // premiere row
         $itRow->next();   // on passe à la seconde ligne pour ne pas copier les labels de la premiere ligne
               
         while($itRow->valid())
         {
             $row = $itRow->current();
             $cellIt = $row->getCellIterator($startColumn,$startColumn);
             $cellIt->rewind();
             while($cellIt->valid())
             {
                 $c = $cellIt->current();
                 $listText[$itRow->key()]= $c->getValue();   
                 $cellIt->next();
             }

             $itRow->next();
         }

         return $listText;
    }
    
    
}


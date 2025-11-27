<?php

class aanbiedingen
{
    public int $idaanbiedingen;
    public string $soort_aanbiedingen;
 



     public function __construct(int $idaanbiedingen, string $soort_aanbiedingen)
    
    {
        $this->idaanbiedingen = $idaanbiedingen;
        $this->soort_aanbiedingen = $soort_aanbiedingen;
    }

 
}


<?php

class Producten
{
    public int $idProducten;
    public string $product_naam;
    public int $product_prijs;
    public int $aanbiedingen_idaanbiedingen;
    public int $type_product_idtype_product;


 
  public function __construct(int $idProducten, string $product_naam,int $product_prijs,int $aanbiedingen_idaanbiedingen, int $type_product_idtype_product)
    
    {
        $this->idProducten = $idProducten;
        $this->product_naam = $product_naam;
        $this->product_prijs = $product_prijs;
        $this->aanbiedingen_idaanbiedingen = $aanbiedingen_idaanbiedingen;
        $this->type_product_idtype_product = $type_product_idtype_product;
    }
}
 
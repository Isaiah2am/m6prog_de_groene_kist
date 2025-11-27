<?php

class type_product
{
    public int $idtype_product;
    public string $type_product;

 
     public function __construct(int $idtype_product, string $type_product)
    
    {
        $this->idtype_product = $idtype_product;
        $this->type_product = $type_product;
    }

 
}
 
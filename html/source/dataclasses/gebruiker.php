<?php

class gebruiker
{
    public int $idgebruiker;
    public string $gebruiker_naam;
    public string $wachtwoord;
 
    public function __construct(int $idgebruiker, string $gebruiker_naam,string $wachtwoord)
    
    {
        $this->idgebruiker = $idgebruiker;
        $this->gebruiker_naam = $gebruiker_naam;
        $this->wachtwoord = $wachtwoord;
    }

 
}
 
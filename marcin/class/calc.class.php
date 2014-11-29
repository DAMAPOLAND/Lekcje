<?php

class calc
{
    private $wynik;

    function __construct()
    {
      
        if(isset($_POST['oblicz']))
        {
            switch ($_POST['dzialanie'])
            {
                case "dodaj": $this->wynik=  $this->dodaj($_POST['a'],$_POST['b']); 
                    break;

                case "odejmij":  $this->wynik=  $this->odejmij($_POST['a'],$_POST['b']);
                    break;
                
                case "pomnoz":  $this->wynik=  $this->pomnoz($_POST['a'],$_POST['b']);
                    break;
                
                case "podziel":  $this->wynik=  $this->podziel($_POST['a'],$_POST['b']);
                    break;
               
            }
            
            echo "Wynik: ".$this->wynik;
        }

    }
    public function dodaj($a, $b)
    {
        return ($a + $b);
    }

    public function odejmij($a, $b)
    {
        return ($a - $b);
    }

    public function pomnoz($a, $b)
    {
        return ($a * $b);
    }

    public function podziel($a, $b)
    {       
        if (!$b)
            return "ERR";
        else
            return ($a / $b);
    }
    
    public function display(){
        $html="<form method=\"POST\">";
         $html.="<input type=\"number\" name=\"a\" required>";
         $html.="<select name=\"dzialanie\" required>";
          $html.="<option value='dodaj'>+</option>";
          $html.="<option value='odejmij'>-</option>";
          $html.="<option value='pomnoz'>*</option>";
          $html.="<option value='podziel'>/</option>";
         $html.="</select>";
         $html.="<input type=\"number\" name=\"b\" required>";
         $html.="<input type=\"submit\" name=\"oblicz\" value=\"Oblicz\">";
        $html.="</form>";
        
        return $html;
    }

}

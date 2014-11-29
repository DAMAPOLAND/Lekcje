<?php

class page {
    
    private $lang;
    private $title;
    private $encoding;
    
    private $scripts=array();
    private $css=array();
    
    private $body="";
    
    
    function __construct($title,$lang="PL",$encoding="utf-8")
    {
        $this->title=$title;
        $this->lang=$lang;
        $this->encoding=$encoding;
    }
    
    public function addJS($src) {
        $this->scripts[]=$src;
    }

    public function addCSS($src) {
        $this->css[]=$src;
    }
    
    public function addContent($html) {
        $this->body.=$html;
    }


    public function test() {
        echo "<pre>";
        var_dump($this);
        echo "</pre>";
    }
    
    public function display() {
        $html="<!DOCTYPE html>";
        $html.="<html lang=\"".$this->lang."\">";
        $html.="<head>";
          $html.="<meta charset=\"".$this->encoding."\">";
          $html.="<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
          $html.="<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
          $html.="<title>".$this->title."</title>";
          
          foreach($this->scripts as $script)
          {
              $html.="<script src=\"".$script."\"></script>";
          }
          
          foreach($this->css as $c)
          {
              $html.="<link href=\"".$c."\" rel=\"stylesheet\">";
          }
          
         $html.="</head>";
         
         $html.="<body>";
            $html.=$this->body;
         $html.="</body>";
         $html.="</html>";
         
         echo $html;
    }
    
}


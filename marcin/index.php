<?php
include 'class/page.class.php';
include 'class/calc.class.php';

$p= new page("Example","pl");

$p->addJS("js/script1.js");
$p->addJS("js/script2.js");
$p->addCSS("css/style.css");

$p->addContent("<h1>Kalkulator</h1>");

$c=new calc();
$p->addContent($c->display());



$p->display();
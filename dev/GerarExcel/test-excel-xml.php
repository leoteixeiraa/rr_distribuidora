<?php
//Esse escript quebra um Galho :D
//Duvidas rafael_santosreis@yahoo.com.br | Um ajudando o Outro União que faz Açucar
//Vamos ao que Foco

// inclui o arquivo php-excel class
require (dirname (__FILE__) . "/class-excel-xml.inc.php");

// cria array
$doc = array (
    1 => array ("$nome", "$idade", "$telefone", "$empresa"),
         array ("Marlene", "Lucy", "Lina")
    );

// Gera o Arquivo excel
$xls = new Excel_XML;
$xls->addArray ( $doc );
$xls->generateXML ("mytest");

?>
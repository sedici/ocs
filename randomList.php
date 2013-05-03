<?php
/*
 * Created on 25/04/2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

fwrite(STDOUT,"Ingrese los nombres entre punto y coma(;)\n");
$input = strtolower(trim(fgets(STDIN))); 
$arreglo= explode(";",$input);
shuffle($arreglo);
$input= implode(";", $arreglo);
$input= $input."\n";
fwrite(STDOUT,$input);


?>

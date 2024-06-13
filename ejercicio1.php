<?php 
$camisas = readline("numero de camisas comprobadas : ");
$precioporcamisa = readline("precio por camisa: ");

$camisa >= 3 ? $descuento = 0.20 : $descuento = 0.10 ;
$total = $camisas * $precioporcamisa * (1 - $descuento);

echo "el total a pagar con descuento es : $" , number_format($total);
 
?>
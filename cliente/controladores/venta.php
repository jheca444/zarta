<?php
$edad= $_POST["edad"];
$valor= $_POST["valor"];

if($edad>=60 & $valor>0){
    $descuento= $valor * 0.20;
    $valorTotal= $valor - $descuento;

    echo("Señor cliente el valor total a pagar es de: $".$valorTotal."COP");
    
}
elseif($edad>0 & $edad<60 & $valor>0){
    echo("Señor cliente el valor total a pagar es de: $".$valor."COP");
}
else{
    echo ("Error");
};


<?php
$cantidad= $_POST["cantidad"];
$unidad= 2000;
$valorTotal= $cantidad * $unidad;
if($cantidad>0){
    echo ("Valor a pagar por ".$cantidad." empanadas es de : $".$valorTotal."COP");
}
else{
    echo ("Error");
};


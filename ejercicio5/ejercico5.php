<?php

$numero = $_GET['numero'];
$i = 1;
$suma;
while($i <= $numero){
    
    $suma += $i;
    echo $suma . "<br>" ;
    $i++;
}
?>
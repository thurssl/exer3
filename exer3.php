<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$r = pow(($a+ $b),2);
$s = pow(($c + $b),2);
$d = ($r + $s) / 2;

if($a<0 && $b<0 && $c<0){
    echo "Apenas Números Positivos.";
}else{
echo "R: $r
    <br>
    S: $s
    <br>
    D: $d";
}
?>
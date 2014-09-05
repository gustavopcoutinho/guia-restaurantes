<!DOCTYPE>
<html>
<head></head>
    <body><?php
function soma($x,$y){
    $soma =$x+$y;
    return $soma;
}
function subtracao($x,$y){
    $sub=$x-$y;
    return $sub;
}
function divisao($x,$y){
    $div=$x/$y;
    return $div;
}
function multiplicacao($x,$y){
    $mult=$x*$y;
    return $mult;
}
function imprime_resultado ($resultado) {
echo "O resultado : ".$resultado;
}

$x=10;
$y=5;
$resultado = soma($x, $y);
imprime_resultado($resultado);
echo "<br>";
$resultado=  subtracao($x, $y);
imprime_resultado($resultado);
echo "<br>";
$resultado= divisao($x, $y);
imprime_resultado($resultado);
echo "<br>";
$resultado= multiplicacao($x, $y);
imprime_resultado($resultado);
echo "<br>";
?></body>
</html>

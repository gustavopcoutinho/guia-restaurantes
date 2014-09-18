<!DOCTYPE>
<html>
    <head></head>
    <body>
        <?php include "operacoes.php"; 
        $x=10;
        $y=5;
        $resultado1 = soma($x, $y);
        imprime_resultado($resultado1);
        echo "<br>";
        $resultado2=  subtracao($x, $y);
        imprime_resultado($resultado2);
        echo "<br>";
        $resultado3= divisao($x, $y);
        imprime_resultado($resultado3);
        echo "<br>";
        $resultado= multiplicacao($x, $y);
        imprime_resultado($resultado);
        echo "<br>";
   
        ?>
        
    </body>
</html>

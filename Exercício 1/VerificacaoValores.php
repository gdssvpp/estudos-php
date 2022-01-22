
<?php

/** Exercício 1 V 0.1 (com algumas coisinhas a mais) - a partir do valor que o usuário colocar a aplicação mostrará se o valor é 
 * um valor Inteiro, Negativo ou Igual a Zero
 */ 

$valor = $_GET["valor"];
$resultado = $_POST;

if ($valor > 0) {
    $resultado = "Valor positivo";

}elseif ($valor < 0) {
    $resultado = "Valor negativo";

}else{
    $resultado = "Valor igual a zero"; 
 }
    
echo "<h3><center>Seu número digitado foi o $valor e ele é considerado um $resultado</center></h3>";

    


?>

<html>
    <title>Valor Verificado</title>
        <body>
        <form name="valor" method="get" action="/phpzada/estudos-php/index.html">
        <center><input type="submit" value="Voltar"></center>
        </body>
</html>
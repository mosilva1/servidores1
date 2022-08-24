<?php

    echo "Meu nome é JOHN";
    echo "<h1> Função Nativa ECHO </h1>";
    echo "<br>";
    echo "Bem vindo!";

    echo "<h4> Variáveis </h4>";

    $nota1 = 7;
    $nota2 = 8;
    $texto = "Minha média é: ";
    $resultado = ($nota1 + $nota2)/2;

    $texto = $texto.$resultado;
    echo $texto;

    if($resultado >= 6)
    {
        echo "<br> Aprovado";
    }
    else if($resultado <6 && $resultado >= 2)
    {
        echo "<br> Tem chance de recuperar";
    }
    else
    {
        echo "<br> Reprovado, seu burro";
    }

    //comentário
    /*
    bloco de comentário
    */
    /*
    $contadora = 0; 
    do{
        echo "<br><br> teste while <br>";
        $contadora ++;
    } while($contadora < 10);

    echo "<br> while: <br> <br>";
    while($contadora <150)
    {
        if($contadora % 2 == 0){
            echo $contadora . " É número Par <br>";
        }else{
            echo "<p>" . $contadora . " É número impar <p>";
        }
    $contadora++;
    }


    for($i =0; $i < 1550; $i++)
    {
        echo "<h1>" . $i. "</h1> <br>";
    }
    //echo "<scritp>window.location.href = 'http://www.globo.com'</script>";
    */

    echo "<table border='5' style='padding:5px'>";
    for ($i=0; $i <25; $i++){
        echo "<tr>";
        echo "<td style='padding:5px'> Nome ".$i. "</td>";
        echo "<td style='padding:5px'> Idade ".$i. "</td>";
        echo "</tr>";
    }
    echo "</table>"
?>
<?php
   // $lista = array();
  //  echo $lista;

    $nome = array("Fernando", "Vitoria", "Denise", "Mateus", "Guilherme", "Roge", "Virlene");

    //Acessando cada item do array Manualmente
    /*
    echo $nome [0]."<br>";
    echo $nome [1]."<br>";
    echo $nome [2]."<br>";
    echo $nome [3]."<br>";
    echo $nome [4]."<br>";
    echo $nome [5]."<br>";
    echo $nome [6]."<br><br><br>";
    */

    //Acessando o array automáticamente
    /*
    for($i = 0; $i < count($nome); $i++)
    {
        echo $nome[$i]."<br>";
    }
    */

    $dados = array();
    $dados["Nome"] = array("Fernando", "Maria", "João");
    $dados["Idade"] = array(32, 18, 23);
    $dados["solteiro"] = array(true, false, false);

    for($i = 0; $i <10; $i++)
    {
        array_push($dados,$i);
    }

    echo "<pre>";
    var_dump($dados);
    echo "</pre>";

?>
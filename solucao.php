<?php

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];

$alunos = []; 

$resposta = 
      [
         "matricula"  => $matricula,
         "nome" => $nome
      ];

array_push($alunos, $resposta);


$json_texto = json_encode(["alunos" => $alunos]);
include("conecta.php");

    $comando = $pdo->prepare("INSERT INTO alunos(nome,matricula) VALUES (\"$nome\", $matricula)");

    $resultado = $comando->execute();
echo($json_texto); 

?>
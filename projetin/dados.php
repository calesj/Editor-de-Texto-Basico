<?php

$nome = isset($_GET["nome"])?["nome"]:"[Nao foi colocado os parametros]";
$ano = isset($_GET["ano"])?["ano"]:"0";
$sexo = isset($_GET["sexo"])?["sexo"]:"[Nao foi colocado os parametros]";
$idade = date("Y") - $ano;
echo "Seu nome é $nome, e você nasceu em $ano e seu sexo é $sexo e sua idade é $idade";

 ?>
 <a href="test .php">Voltar</a>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php
    /*Verificando se os parametros foram respondidos, do contrario
    "Texto nulo", "14", e "#0000000" sera o texto, o tamanho e a cor padrao*/
$txt = isset($_GET["t"])?$_GET["t"]:"Texto Nulo";
$tam = isset($_GET["tam"])?$_GET["tam"]:"14";
$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";

/////////////////////////////////////////////////////////////////////////////
     ?>
    <meta charset="utf-8">
    <title>cores</title>
    <style>
span.texto{
  font-size: <?php echo $tam; ?>;
  color: <?php echo $cor; ?>;
}
    </style>
  </head>
  <body>

    <?php
    /*Criamos uma classe com o texto da variavel para modificar a cor e o tamanho
    atraves do CSS */
    echo "<span class='texto'>$txt</span>"
     ?>
  </body>
</html>

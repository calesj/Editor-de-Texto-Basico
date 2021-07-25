
<!DOCTYPE html>
<html lang=pt dir="ltr">
  <head>
    <meta charset="utf-8">
  <style>

</style>
    <title>Aula</title>
  </head>
  <body>


    <div>

      <form method="get" action="dados.php">
      Nome: <input type="text" name="nome">
      Ano de Nascimento: <input type="number" name="ano">
      <fieldset><legend>Sexo</legend>
        <input type="radio" name="sexo" id="masc" value="Homem">
        <label for="masc">Masculino</label><br>
        <input type="radio" name="sexo" id="fem" value="Mulher">
        <label for="fem">Feminino</label><br>

      </fieldset>
        <input type="submit" name="calcular" value="Enviar">
      </form>



  </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

<h1>Soma</h1>

    <form action="/exerc1resp" method="POST">
        @csrf
        <input type="number" name="valor1" placeholder="Insira o 1º valor: " />
        <input type="number" name="valor2" placeholder="Insira o 2º valor: " />

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
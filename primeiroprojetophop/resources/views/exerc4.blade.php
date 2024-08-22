<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Divisão</h1>

    <form action="/exerc4resp" method="POST">
        @csrf
        <input type="number" name="valor1" placeholder="Insira o 1º valor: " required min="1"/>
        <input type="number" name="valor2" placeholder="Insira o 2º valor: " required min="1"/>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
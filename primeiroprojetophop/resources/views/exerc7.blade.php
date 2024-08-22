<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Conversão de Temperatura de Fahrenheit para Celsius</h1>

    <form action="/exerc7resp" method="POST">
        @csrf
        <input type="number" name="fahrenheit" placeholder="Informe a temperatura em Fahrenheit: " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
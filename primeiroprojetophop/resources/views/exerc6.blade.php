<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Conversão de Temperatura de Celsius para Fahrenheit</h1>

    <form action="/exerc6resp" method="POST">
        @csrf
        <input type="number" name="celsius" placeholder="Informe a temperatura em Celsius: " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
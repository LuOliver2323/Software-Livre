<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 13</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Conversão de metros para centímetros</h1>

    <form action="/exerc13resp" method="POST">
        @csrf
        <input type="number" name="metros" placeholder="Informe o valor em metros " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
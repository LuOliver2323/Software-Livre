<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Calcular a área do círculo (πr²)</h1>

    <form action="/exerc9resp" method="POST">
        @csrf
        <input type="number" name="raio" placeholder="Informe o raio de um círculo: " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
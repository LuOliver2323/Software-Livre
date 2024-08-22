<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Calcular o perímetro do retângulo</h1>

    <form action="/exerc10resp" method="POST">
        @csrf
        <input type="number" name="largura" placeholder="Informe a Largura do retângulo: " required>
        <input type="number" name="altura" placeholder="Informe a Altura do retângulo: " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Calcular a base elevada ao expoente</h1>

    <form action="/exerc12resp" method="POST">
        @csrf
        <input type="number" name="base" placeholder="Informe a base: " required>
        <input type="number" name="expoente" placeholder="Informe o expoente: " required>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
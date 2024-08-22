<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Exercício 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

<body>

<h1>Calcular a média das notas</h1>

    <form action="/exerc5resp" method="POST">
        @csrf
        <input type="number" name="valor1" placeholder="Insira o 1º valor: " required>
        <input type="number" name="valor2" placeholder="Insira o 2º valor: " required/>
        <input type="number" name="valor3" placeholder="Insira o 3º valor: " required/>

        <button type="submit">Calcular</button>
    </form>        

</body>
</html>
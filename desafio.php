<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meus ovo</title>
  <link rel="stylesheet" href="style.css">
  <script src="handleNumbers.js" defer></script>
</head>
<body>

  <main id="container">
    
    <form action="desafio.php" method="post" class="border-radius">
      <!-- Input para obter nome do estudante -->
      <label for="name">Nome do aluno:</label>
      <input type="text" id="name" name="name" class="border-radius">

      <!-- Inputs para obter as notas do aluno -->
      <label for="num1"> Primeira nota</label>
      <input type="text" class="numberInput border-radius" name="num1">
      <label for="num2"> segunda nota</label>
      <input type="text" class="numberInput border-radius" name="num2">
      <label for="num3"> terceira nota</label>
      <input type="text" class="numberInput border-radius" name="num3">
      <label for="num4"> quarta nota</label>
      <input type="text" class="numberInput border-radius" name="num4">
      <input id="submitBtn" type="submit" value="Enviar" class="border-radius">
    </form>


    <?php
    $_SERVER['REQUEST_METHOD'];
      // Obtendo os valores através do método POST
      $name = $_POST['name'];
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $num3 = $_POST['num3'];
      $num4 = $_POST['num4'];

      // Validar nome (exemplo de validação simples)
      if (empty($name)) {
      echo 'O campo nome é obrigatório.';
      }

      // Verifica se os valores recebidos são de fato númericos e se são menores que o valor máximo 10
      $validNum1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT)  && $num1 <= 10;
      $validNum2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT)  && $num1 <= 10;
      $validNum3 = filter_input(INPUT_POST, 'num3', FILTER_VALIDATE_FLOAT)  && $num1 <= 10;
      $validNum4 = filter_input(INPUT_POST, 'num4', FILTER_VALIDATE_FLOAT)  && $num1 <= 10;

      if ($validNum1 === false || $validNum2 === false || $validNum3 === false || $validNum4 === false) {
        echo 'Pelo menos um dos campos numéricos possui um valor inválido.';
      } else {
        // Armazenando os valores em um array
        $numbers = [
          $num1, $num2, $num3, $num4
        ];
        // Somando os valores
        $soma = array_sum($numbers);
        // echo $soma;
        // Obtendo o denominador
        $denominador = count($numbers);
        // Calculando a média
        $media = $soma / $denominador;
        if ($media >= 7){
          echo "<p>Aluno(a) $name foi <span class='aprovado'>aprovado(a)</span></p>";
        }
        else if ($media < 7) {
          echo "<p>Aluno(a) $name foi <span class='reprovado'>reprovado(a)</span></p>";
        }
      }
      
       
    ?>
  </main>
</body>
</html>


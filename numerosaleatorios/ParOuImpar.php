<!DOCTYPE html>

<?php
  $gera = rand(0, 10);
  $pi = isset($_POST['pi']) ? $_POST['pi'] : "";
?>

<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Números Aleatórios - Par Ou Impar</title>
</head>

<body>
  <form action="" method="post">
    <p></p>

    <input type="radio" name="pi" value="par" required/>Par
    <input type="radio" name="pi" value="impar" required/> Impar
    <p></p>

    <select name="valor" required>
  <option value="1" >1 </option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

    <input type="submit" name="enviar" value="Enviar">
  </form>

  <?php  
  
  if (isset($_POST ['enviar'])) : ?>
  <h1><?php echo "Você escolheu : ". $pi; ?></h1>
  <h1><?php echo "E jogou o valor: ". (isset($_POST ['valor']) ? $_POST['valor'] : ""); ?></h1>
  <h1><?php echo "O pc jogou: ". $gera; ?></h1>

  <?php
   
    if (((isset($_POST ['valor']) ? $_POST['valor'] : "")+$gera) % 2 == 0) {
        if ($pi == "par") {
            echo "<b><font size=+4>Você ganhou.</b></font>";
        } else {
            echo "<b><font size=+4>Você perdeu.</b></font>";
        }
    } else {
        if ($pi == "impar") {
            echo "<b><font size=+4>Você ganhou.</b></font>";
        } else {
            echo "<b><font size=+4>Você perdeu.</b></font>";
        }
    }
 ?>

  <?php endif; ?>


</body>

</html>
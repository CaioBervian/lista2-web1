<!DOCTYPE html>

<?php
  $pc1 = rand(1, 6);
  $pc2 = rand(1, 6);
  $usuario1 = rand(1, 6);
  $usuario2 = rand(1, 6);
    $x = 0;

?>

<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Números Aleatórios - Dados</title>
</head>

<body>
  <form action="" method="post">


    <input type="submit" name="JogarDados" value="Gire os Dados">
  </form>
  <?php

 if (isset($_POST ['JogarDados'])) : ?>
 
    <?php
    ?><br /><?php
    echo "Dados do computador: ";
    echo "<img src='dados/$pc1.png' alt=''>";
    echo "<img src='dados/$pc2.png' alt=''>";
    $somapc = $pc1+$pc2;
    echo "Soma do computador: " . $somapc;

    ?><br /><?php
    echo "Dados do usuário: ";
    echo "<img src='dados/$usuario1.png' alt=''>";
    echo "<img src='dados/$usuario2.png' alt=''>";
    $somausuario = $usuario1 + $usuario2;
    echo "Soma do usuário: " . $somausuario;
    ?><br /><?php
   

      
    

      ?><br /><?php
      ?><br /><?php
      if($somapc > $somausuario){
       
          echo "<b>Computador ganhou.</b>";
          ?><br /><?php
      }
      if($somapc < $somausuario){
        echo "<b>Usario ganhou.</b>";
        ?><br /><?php
    }
    if($somapc == $somausuario){
        echo "<b>Empatou.</b>";
        ?><br /><?php
    }

endif;
 ?>



</body>

</html>
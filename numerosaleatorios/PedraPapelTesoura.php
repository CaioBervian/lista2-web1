<!DOCTYPE html>

<?php
  $pc = rand(1, 3);
?>

<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Números Aleatórios - Jokenpo</title>
</head>

<body>
  <form action="" method="post">

  <input type="radio" name="mao" value="pedra" required/>Pedra
    <input type="radio" name="mao" value="papel" required/> Papel
    <input type="radio" name="mao" value="tesoura" required/>Tesoura

    <input type="submit" name="jokenpo" value="Jokenpo">
  </form>
  <?php

 if (isset($_POST ['jokenpo'])) : ?>

 <?php
 echo "Computador: ";
 echo "<img src='maos/$pc.png' alt=''>";
 ?><br /><?php

 echo "Usuário: ";
if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "pedra"){
   $valor1= 2;
 echo "<img src='maos/$valor1.png' alt=''>";
}
if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "tesoura"){
   $valor1= 1;
    echo "<img src='maos/$valor1.png' alt=''>";
   }
   if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "papel"){
   $valor1= 3;
    echo "<img src='maos/$valor1.png' alt=''>";
   }
   ?><br /><?php

 if($valor1 === 1 and $pc === 1){
    ?><br /><?php 
    echo "<b>Empatou.</b>";
 }
 if($valor1 === 2 and $pc === 2){
    ?><br /><?php
    echo "<b>Empatou.</b>";
}
if($valor1 === 3 and $pc === 3){
    ?><br /><?php
    echo "<b>Empatou.</b>";
}
 if($valor1 === 2 and $pc === 1){
    ?><br /><?php
    echo "<b>Usuário ganhou.</b>";
}
if($valor1 === 3 and $pc === 1){
    ?><br /><?php
    echo "<b>Computador ganhou.</b>";
}
if($valor1 === 1 and $pc === 2){
    ?><br /><?php
    echo "<b>Computador ganhou.</b>";
}
if($valor1 === 1 and $pc === 3){
    ?><br /><?php
    echo "<b>Usuário ganhou.</b>";
}
if($valor1 === 2 and $pc === 3){
    ?><br /><?php
    echo "<b>Computador ganhou.</b>";
}
if($valor1 === 3 and $pc === 2){
    ?><br /><?php
    echo "<b>Usuário ganhou.</b>";
}

 

endif;
 ?>



</body>

</html>
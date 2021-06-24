<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
  class Calculadora{
    function sumar($v1,$v2){
      return $v1+$v2;
    }
    function restar($v1,$v2){
      return $v1-$v2;
    }
    function multiplicar($v1,$v2){
      return $v1*$v2;
    }
    function dividir($v1,$v2){
      return $v1/$v2;
    }

  }

  $c = new Calculadora;
  print $c->sumar(2,2);
  print '<br>';
  print $c->restar(4,2);
  print '<br>';
  print $c->multiplicar(2,5);
  print '<br>';
  print $c->dividir(5,10);
  print '<br>';

    ?>
</body>
</html>
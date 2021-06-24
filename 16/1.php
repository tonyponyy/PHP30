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
     class Cuadrado{
         protected $lado;
         function cargar_lado($lado){
             $this->lado = $lado;
         }
         function superficie(){
             return $this->lado*$this->lado;
         }
         function perimetro(){
            return $this->lado*4;
         }
     }
     $c1 = new Cuadrado;
     $c1->cargar_lado(4);
     $c2 = $c1;
     print $c2->superficie();
     print '<br>';
     print $c2->perimetro(); 

    ?>
</body>
</html>
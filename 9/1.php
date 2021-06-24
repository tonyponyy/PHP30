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
    abstract class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;
        function muestra(){
        }

    }

    class suma extends Operacion{
        function carga($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }
        function muestra(){
            $this->resultado = ($this->valor1 + $this->valor2) ;
            return  $this->resultado;
        }
    }
    
    class resta extends Operacion{
        function carga($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }
        function muestra(){
            $this->resultado = ($this->valor1 - $this->valor2) ;
            return  $this->resultado;
        }
    }
$op1 = new suma;
$op1->carga(12,34);
print $op1->muestra();
print '<br>';
$op1 = new resta;
$op1->carga(12,2);
print $op1->muestra();

    ?>
</body>
</html>
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
       final function muestra(){
           return resultado;
        }

    }

    class suma extends Operacion{
        function carga($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }
       final function muestra(){
            $this->resultado = ($this->valor1 + $this->valor2) ;
            return  $this->resultado;
        }
    }
// NO FUNCIONA PORQUE NO PUEDE SOBREESCRIVIRSE
    $op1 = new suma;
    $op1->carga(12,56);
    $op1->muestra();
   

    ?>
</body>
</html>
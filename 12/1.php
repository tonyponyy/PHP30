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
    abstract class Trabajador{
        protected $nombre;
        protected $sueldo;

       abstract function calcularSueldo();


    }
    class Empleado extends Trabajador{
       protected $horasTrabajadas;
       protected $valorHora = 3.5;
        function calcularSueldo(){
            return $this->horasTrabajadas*$this->valorHora;
        }

    }

class Gerente extends Empleado{
    function calcularSueldo(){
        return $this->horasTrabajadas*$this->valorHora +  ($this->horasTrabajadas*$this->valorHora)/10 ;
    }
}

    ?>
</body>
</html>
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
    abstract class Persona{
        protected $nombre;
        protected $edad;
        function carga($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function imprimir(){
           print 'Nombre: '.$this->nombre.'   Edad : '.$this->edad;
        }
    }
    class Empleado extends Persona{
       protected $sueldo;
    }
$emp1 = new Empleado;
$emp1->carga("Jordi",33);
$emp1->imprimir();

    ?>
</body>
</html>
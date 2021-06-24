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
         final function carga($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function imprimir(){
           print 'Nombre: '.$this->nombre.'   Edad : '.$this->edad;
        }
    }
    final class Empleado extends Persona{
       protected $sueldo;
       function imprimir(){
        parent::imprimir();
        print '   Sueldo : '.$this->sueldo ;
       }
       // al no poder modificar la funcion de carga tenemos que crear otra para añadir el sueldo
       function carga_sueldo($sueldo){
        $this->sueldo = $sueldo;
       }
    }
$emp1 = new Empleado;
$emp1->carga("Jordi",33);
$emp1->carga_sueldo(3000);
$emp1->imprimir();
    ?>
</body>
</html>
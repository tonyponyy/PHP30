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
    
    abstract class Trabajador {
        protected $nombre;
        protected $sueldo;

        public function __construct($nombre,$sueldo){
          $this->nombre=$nombre;
          $this->sueldo=$sueldo;
        }
        public function muestra_sueldo(){
          return $this->sueldo;
        }
      }  
      
      class Empleado extends Trabajador {
      }
      
      class Gerente extends Trabajador {
      }
      
      $objetos=[];
      for ($i=0; $i < 10 ; $i++) { 
         $o = new Empleado('Empleado'.$i,rand (1000,1500));
         $o2 = new Gerente('Gerente'.$i,rand (1500,3000));
        array_push($objetos,$o,$o2);
      }
      
      $Empleados_sueldos=0;
      $Gerentes_sueldos =0;
      for($f=0;$f<count($objetos);$f++)
      {
        if ($objetos[$f] instanceof Empleado)
        $Empleados_sueldos=$Empleados_sueldos+$objetos[$f]->muestra_sueldo();
        else
          if ($objetos[$f] instanceof Gerente)
          $Gerentes_sueldos= $Gerentes_sueldos+$objetos[$f]->muestra_sueldo();
      }
      print 'Empleados :'.$Empleados_sueldos;
      print '<br>';
      print 'Gerentes :'.$Gerentes_sueldos;
      

    ?>
</body>
</html>
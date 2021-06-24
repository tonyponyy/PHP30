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
    
  class banner{
    protected $texto;
    function __construct($texto){
      $this->texto=$texto;
    }
    function imprimir(){
      print '<h1>'.$this->texto.'</h1>';
    }
     function __destruct()
    {
      echo "</br>";
      echo "objeto destruido";
    }
  }

$banner = new banner('ESTO ES UN BANNER');
$banner->imprimir();


    ?>
</body>
</html>
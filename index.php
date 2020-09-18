<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php console</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Php console</a>
        
   </nav>
   <div class="jumbotron jumbotron-fluid">
    <div class="container">
       <h1 class="display-4">Consola de PHP</h1>
    <p class="lead">Esto es una consola</p>
  </div>
</div>

<div class "container"> 
<div class="classrow">
<div class="col-12">
<div class="p-3 m-2 bg-primary  text-white">
<h3> clase:Funciones  </h3> <br>
<?php
function calc($sign, $num1, $num2){
  switch ($sign) {
      case "+";
          return $num1 + $num2; 
          break;
      case "-"; 
          return $num1 - $num2; 
          break;
          default:
          return 0; 
  }

}
        $result = calc("+", 3, 3); 
        echo "el resultado es: " . $result; 

?>
</div>


</div>
<div class="row">
<div class="col-6">
<div class="p-3 m-2 bg-primary  text-white">
<h3> clase:Break  </h3> <br>
<?php
    $names  = array("Max", "pepe", "luis", "Tom");
    foreach ($names as $name)
     if ($name == "Tom"){
     break;
    }
     {
        echo $name . "<br>";
    }

?>
</div>
</div>

<div class="row">
<div class="col-6">
<div class="p-3 m-2 bg-primary  text-white">
<h3> clase:Continue </h3> <br>
<?php
    $names  = array("Max", "pepe", "luis");

    foreach ($names as $name) {
        echo $name . "<br>";
    }

?>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="p-3 m-2 bg-warning text-white">
<h3> clase: bucle for </h3>  <br>
<?php
$num = 0; 
for ($i=0; $i < 5; $i++) { 
     echo " El numero es: " . $i . "<br>";
}


?>
</div>
</div>
</div>

    <div class class="row">
                  <div class="col-12">
                   <div class="p-3 m-2 bg-info text-white">
                     <h3> clase: Condicional SWITCH </h3>
                       <?php
                         $num = 10; 
                        if ($num == 1) {
                        echo "la calificacion es muy baja";}
                        elseif ($num == 2) {
                            echo "la calificacion sigue siendo siendo muy baja";}
                        else {
                            echo "la calificacion no es valida";
                        }
                        
    
                         ?>
                   </div>
               </div>
           </div>

               <div class class="row"> 
                 <div class="col-12">
                    <div class="p-3 m-2 bg-primary text-white">
                       <h3> clase: Condicional If </h3> 
                          <?php 
                       $name = "Maxi";  
                     if ($name =="Max") {
                   echo "Sos el indicado";
                     }
                  else {
               echo "no sos el indicado";
          }
 ?>
 </div>
 </div>
 </div>


 </class>
    <div class="row"> 
    <div class="col-12">
        <div class="p-3 m-2 bg-info text-white">
          <h3> clase:  operadores </h3> 
      <?php 
           $num1 = 1; 
           $num2 = 2; 
           $Resultado = $num1 + $num2; 
           echo "El resultado es: " . $Resultado; 

      ?>


    </div>
</div>
</div>
    <div class="row"> 
    <div class="col-12">
        <div class="p-3 m-2 bg-primary text-white">
          <h3> clase:  variables y tipos de datos </h3> 
      <?php 
            $name = "Max"; 
            $isOLD = true; 
            $year = 1990; 
            $km  = 54.4; 

            echo "hola ".  $name . " naciste en el " .  $year . " y estas a " . $km . " kilometros ." . "<Br>"; 
            echo "la variable name es de tipo: " . gettype($name);

      ?>


    </div>
</div>
</div> 
<div class "container">
    <div class="row"> 
    <div class="col-12">
        <div class="p-3 m-2 bg-info text-white">
          <h3> clase:  operadores </h3> 
      <?php 
           

      ?>


    </div>
</div>
</div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    
</body>
</html>
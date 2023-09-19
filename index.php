<?php 

$res = array(
  1, 1.2, 1.5, 1.8, 2 , 2.2, 2.7, 3, 4 , 6, 10, 12, 15, 18, 22, 27, 33, 39, 47, 56, 68, 82, 100, 120, 150, 180, 220, 270, 330, 390, 470, 560, 680, 820, 1000, 1200, 1500, 1800, 2200, 2700, 3300, 3900, 4700, 5600, 6800, 8200, 10000, 12000, 15000, 18000, 22000, 27000, 33000, 39000, 47000, 56000, 68000, 82000, 100000, 120000, 150000, 180000, 220000, 270000, 330000, 390000, 470000, 560000, 680000, 820000, 1000000, 1100000, 1200000, 1300000, 1500000, 1600000, 1800000, 2000000, 2200000, 2400000, 2700000, 3000000, 3300000, 3600000, 3900000, 4300000, 4700000, 5100000, 5600000, 6200000, 6800000, 7500000, 8200000, 9100000
);

$volt = array(2, 3.3 , 5 , 6, 9, 10 , 12 , 22, 24 , 48);

//print_r($_POST);

function notacion_numerica($numero) {
  if ($numero >= 1000000) {
    $numero = round($numero/1000000, 2) . ' M';
  } elseif ($numero >= 1000) {
    $numero = round($numero/1000, 2) . ' K';
  } else {
    $numero .= '';
  }
  return $numero;
}
/*
if(isset($_POST)){
  $v1 = $_POST['f1'];
  $v2 = $_POST['f2'];
  $r1 = $_POST['r1'];
  $r2 = $_POST['r2'];
  $r3 = $_POST['r3'];

  $v3 = $v1 + $v2;
  // Malla 1
  $m1r1 = $r1 + $r3;
  // Malla 2
  $m2r1 = $r2 + $r3;

  //Despeje de malla 2
  $t1 = $r3/$m2r1;
  $t2 = $v2/$m2r1;  
  //Sustitucion en ec malla 1

  $t1r3 = -$t1 * $r3;
  $t2r3 = $t2 * $r3;
  $t1r3m1r1 = $m1r1 + $t1r3;
  // calculo intensidad I1

  $i1 = ($v1 - $t2r3) / $t1r3m1r1;

  // calculo intensidad I2

  $i2 = (-$t1*$i1) + $t2;

  //Calculo de I3

  $i3= $i1 + $i2;

} */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/malla.css">
    <link rel="stylesheet" href="style/malla3.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  </head>
<body id="background" onload="init();">


  <div class="container">
    <div class="row">
      <div class="col-3">
        <label for="">Diagrama</label>
        <select id="select-mallas" class="form-control form-control-sm" name="">
          <option value="Dosmallas.php">Dos Mallas</option>
          <option value="Tresmallas.php">Tres Mallas</option>
          <option value="Cuatromallas.php">Cuatro Mallas</option>
          <option value="Cincomallas.php">Cinco Mallas</option>
        </select>
      </div>
    </div>
  </div>

  <div id="central">

  </div>



    
 
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="js/nav.js"></script>
<script src="js/app.js"></script>
<script src="js/flujo.js"></script>
<style>
    #background{
        background-color: #ff7700;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cpolygon fill='%23cc0000' points='957 450 539 900 1396 900'/%3E%3Cpolygon fill='%23661caa' points='957 450 872.9 900 1396 900'/%3E%3Cpolygon fill='%23d6002b' points='-60 900 398 662 816 900'/%3E%3Cpolygon fill='%237016a3' points='337 900 398 662 816 900'/%3E%3Cpolygon fill='%23d9004b' points='1203 546 1552 900 876 900'/%3E%3Cpolygon fill='%2377109c' points='1203 546 1552 900 1162 900'/%3E%3Cpolygon fill='%23d3006c' points='641 695 886 900 367 900'/%3E%3Cpolygon fill='%237e0a95' points='587 900 641 695 886 900'/%3E%3Cpolygon fill='%23c4008c' points='1710 900 1401 632 1096 900'/%3E%3Cpolygon fill='%2383048f' points='1710 900 1401 632 1365 900'/%3E%3Cpolygon fill='%23aa00aa' points='1210 900 971 687 725 900'/%3E%3Cpolygon fill='%23880088' points='943 900 1210 900 971 687'/%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }
</style>
</html>
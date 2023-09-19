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

?>


<div >
    <div id="flujo">
      <div id="box-del-tre">
        <i class="bi bi-arrow-clockwise custome-size-tre icon-arrow-tre" value="1" id=""></i>
      </div>
    </div>
    <div id="flujo2">
      <div id="box-del2-tre">
        <i class="bi bi-arrow-counterclockwise custome-size-tre icon-arrow2-tre" value="2"></i>
      </div>
    </div>
    <button class="btn btn-light" id="button-change1-tre" onclick="flushTre('flujo');"><i class="bi bi-arrow-clockwise custome-size-tre"></i></button>
    <button class="btn btn-light" id="button-change2-tre" onclick="flushTre('flujo2');"><i class="bi bi-arrow-counterclockwise custome-size-tre"></i></button>
    <button class="btn btn-light" id="button-change3-tre" onclick="flushTre('flujo3');"><i class="bi bi-arrow-counterclockwise custome-size-tre"></i></button>
    
    <div id="flujoSourse">
      <div id="box-del">
        <i value="1"></i>
      </div>
    </div>
    <div id="flujoSourse2">
      <div id="box-del2">
        <i value="2"></i>
      </div>
    </div>
    
    <div class="row align-items-center" id="img-cir">
      <img src="img/circuito-3-mallass.svg" height="300px" alt="" id="img-cir-chan">
    </div>

  </div>

  
      <form action="#" method="post" id="form">
          </p>
        <div class="container text-center">
          <div class="col align-self-center">
            <div class="card text-bg-light mb-3" >
              <div class="card-header">Formulario</div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Unidad</th>
                      <th scope="col">Valor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Resistencia 1 </td>
                      <td>
                        <select class="form-control" name="r1" id="r1">
                          <?php for($i=0;$i<count($res);$i++){  ?>
                            <option value= <?php echo "'".$res[$i]."'"; if(isset($_POST['r1']) && $_POST['r1'] == $res[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($res[$i]); ?> &#x3A9  </option>
                          <?php }?>
                        </select>
                    </td>
                    </tr>
                    <tr>
                      <td>Resistencia 2 </td>
                      <td>
                        <select class="form-control" name="r2" id="r2">
                          <?php for($i=0;$i<count($res);$i++){  ?>
                            <option value= <?php echo "'".$res[$i]."'"; if(isset($_POST['r2']) && $_POST['r2'] == $res[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($res[$i]); ?> &#x3A9  </option>
                          <?php }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Resistencia 3 </td>
                      <td>
                        <select class="form-control" name="r3" id="r3">
                          <?php for($i=0;$i<count($res);$i++){  ?>
                            <option value= <?php echo "'".$res[$i]."'"; if(isset($_POST['r3']) && $_POST['r3'] == $res[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($res[$i]); ?> &#x3A9  </option>
                          <?php }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Resistencia 4 </td>
                      <td>
                        <select class="form-control" name="r4" id="r4">
                          <?php for($i=0;$i<count($res);$i++){  ?>
                            <option value= <?php echo "'".$res[$i]."'"; if(isset($_POST['r4']) && $_POST['r4'] == $res[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($res[$i]); ?> &#x3A9  </option>
                          <?php }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Fuente 1 </td>
                      <td>
                        <select class="form-control" name="f1" id="v1">
                          <?php for($i=0;$i<count($volt);$i++){  ?>
                            <option value= <?php echo "'".$volt[$i]."'"; if(isset($_POST['f1']) && $_POST['f1'] == $volt[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($volt[$i]); ?> V  </option>
                          <?php }?>
                        </select>
                        <!-- <input class="form-control" autocomplete="off" value="<?php echo isset($_POST['f1'])?$_POST['f1']:''; ?>" type="text" name="f1"> -->
                      </td>
                    </tr>
                    <tr>
                      <td>Fuente 2 </td>
                      <td>
                      <select class="form-control" name="f2" id="v2">
                          <?php for($i=0;$i<count($volt);$i++){  ?>
                            <option value= <?php echo "'".$volt[$i]."'"; if(isset($_POST['f2']) && $_POST['f2'] == $volt[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($volt[$i]); ?> V  </option>
                          <?php }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Fuente 3 </td>
                      <td>
                      <select class="form-control" name="f3" id="v3">
                          <?php for($i=0;$i<count($volt);$i++){  ?>
                            <option value= <?php echo "'".$volt[$i]."'"; if(isset($_POST['f3']) && $_POST['f3'] == $volt[$i]) { echo 'selected'; } ?>> <?php echo notacion_numerica($volt[$i]); ?> V  </option>
                          <?php }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Intensidad 1 </td>
                      <td><div id="I1"></div></td>
                    </tr>
                    <tr>
                      <td>Intensidad 2 </td>
                      <td><div id="I2"></div></td>
                    </tr>
                    <tr>
                      <td>Intensidad 3 </td>
                      <td><div id="I3"></div></td>
                    </tr>
                  </tbody>
                </table>  
                <button class="form-control"  id="" rows="1" type="submit" class="btn btn-primary" > Calcular</button>
              </div>
            </div>
          </div>
        </div>
      </form>
  <!-- Aqui estaba el form -->

    
 
function getValueFlush(id) {
  // Obtengo los datos del flujo que deseo cambiar ya sea 1 o 2
  var flushBox = document.getElementById(id);
  // Seleciono el la etiqueta i del flujo seleccionado
  var icon = flushBox.querySelector('i');
  // Obtine el valor del flujo entre un valor de 1 o 2
  var value = icon.getAttribute("value");
  return value
}
function flush (id) {
  // Obtengo los datos del flujo que deseo cambiar ya sea 1 o 2
  var flushBox = document.getElementById(id);
  // Seleciono el la etiqueta i del flujo seleccionado
  var icon = flushBox.querySelector('i');
  // Obtine el valor del flujo entre un valor de 1 o 2
  var value = icon.getAttribute("value");
  //Seleciona la etiqueta div dentro del flujo selecionado
  var boxDel = flushBox.querySelector('div')
  //obtiene el valor de la etiqueta div ya sea box-del  o box-del2
  var idDel = boxDel.getAttribute('id');
  console.log(id);
  //eliminamos el lo que adentro de la etiqueta de flujo con la etiqueta div con el id box-del o box-del2
  flushBox.removeChild(boxDel);
  if (value=="1") {
    var text = id =="flujo"?'':'2';
    var content = '<div id="'+idDel+'"><i class="bi bi-arrow-counterclockwise custome-size icon-arrow'+text+'" value="2"></i></div>';
    flushBox.innerHTML = content;
  } else {
    var text = id =="flujo"?'':'2';
    var content = '<div id="'+idDel+'"><i class="bi bi-arrow-clockwise custome-size icon-arrow'+text+'" value="1"></i></div>' ;
    flushBox.innerHTML = content;
  }
}

function flushSource (id) {
  // Obtengo los datos del flujo que deseo cambiar ya sea 1 o 2
  var flushBox = document.getElementById(id);
  // Seleciono el la etiqueta i del flujo seleccionado
  var icon = flushBox.querySelector('i');
  // Obtine el valor del flujo entre un valor de 1 o 2
  var value = icon.getAttribute("value");
  //Seleciona la etiqueta div dentro del flujo selecionado
  var boxDel = flushBox.querySelector('div')
  //obtiene el valor de la etiqueta div ya sea box-del  o box-del2
  var idDel = boxDel.getAttribute('id');
  console.log(id);
  //eliminamos el lo que adentro de la etiqueta de flujo con la etiqueta div con el id box-del o box-del2
  flushBox.removeChild(boxDel);
  if (value=="1") {
    var text = id =="flujo"?'':'2';
    var content = '<div id="'+idDel+'"><i value="2"></i></div>';
    flushBox.innerHTML = content;
  } else {
    var text = id =="flujo"?'':'2';
    var content = '<div id="'+idDel+'"><i value="1"></i></div>' ;
    flushBox.innerHTML = content;
  }
  var img = document.getElementById('img-cir');
  var imgCha = img.querySelector('img');
  var flujo = getValueFlush('flujoSourse');
  var flujo2 = getValueFlush('flujoSourse2');
  console.log(imgCha)
  img.removeChild(imgCha);
  if (flujo == '1' && flujo2 == '2'){
    var text = '<img src="img/circuito.svg" height="300px" alt="" id="img-cir-chan">';
    img.innerHTML = text;
  }else if (flujo == '2' && flujo2 == '2'){
    var text = '<img src="img/circuito-inv.svg" height="300px" alt="" id="img-cir-chan">';
    img.innerHTML = text;
  }else if (flujo == '2' && flujo2 == '1'){
    var text = '<img src="img/circuito-inv-2.svg" height="300px" alt="" id="img-cir-chan">';
    img.innerHTML = text;
  }else if (flujo == '1' && flujo2 == '1'){
    var text = '<img src="img/circuito-inv-1.svg" height="300px" alt="" id="img-cir-chan">';
    img.innerHTML = text;
  }


}






document.getElementById("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Evita que el formulario se recargue

  //Toma el estado en el que esta el flujo de corriente
  var stateFlushA = document.getElementById('flujo').querySelector('i').getAttribute('value')
  var stateFlushB = document.getElementById('flujo2').querySelector('i').getAttribute('value')
  console.log('Flujo A:',stateFlushA);
  console.log('Flujo B:',stateFlushB);
  
  // Aquí puedes realizar las acciones con los datos del formulario
  var r1 = parseFloat(document.getElementById("r1").value);
  var r2 = parseFloat(document.getElementById("r2").value);
  var r3 = parseFloat(document.getElementById("r3").value);
  var v1 = parseFloat(document.getElementById("v1").value);
  var v2 = parseFloat(document.getElementById("v2").value);

  var v3, m1r1, m1r1, t1, t2, t1r3, t2r3, t1r3m1r1, i1, i2, i3;

  i1 = ( (r3*v1)+(r2*v1)-(r3*v2)) / ((r1*r3)+(r1*r2)+(r3*r2)) ;
  i2 = stateFlushB == 1? ( -v2-(-r3*i1)) / (r3+r2) : ( v2-(r3*i1)) / (r3+r2) ; 
  //i2 = ( v2-(r3*i1)) / (r3+r2);
  i3 = i1 + i2; 

 /* v3 =  v1 +  v2;
  // Malla 1
  m1r1 =  r1 +  r3;
  // Malla 2
  m2r1 =  r2 +  r3;

  //Despeje de malla 2
  t1 =  r3/ m2r1;
  t2 =  v2/ m2r1;  
  //Sustitucion en ec malla 1

  t1r3 = - t1 *  r3;
  t2r3 =  t2 *  r3;
  t1r3m1r1 =  m1r1 +  t1r3;
  // calculo intensidad I1

  i1 = ( v1 -  t2r3) /  t1r3m1r1;

  // calculo intensidad I2

  i2 = (- t1* i1) +  t2;

  //Calculo de I3

  i3=  i1 +  i2;
  */
  var I1 = document.getElementById('I1');
  var I2 = document.getElementById('I2');
  var I3 = document.getElementById('I3');
  I1.innerHTML = i1;
  I2.innerHTML = i2;
  I3.innerHTML = i3;
  
  // Ejemplo: Mostrar los datos en la consola
  console.log("R1: " + r1);
  console.log("R2: " + r2);
  console.log("R3: " + r3);
  console.log("V1: " + v1);
  console.log("V2: " + v2);
  console.log("I1: " + i1);
  console.log("I2: " + i2);
  console.log("I3: " + i3);
});
@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-12">
            <form method="POST" action="{{ route('verF2') }}" enctype="multipart/form-data">
              @csrf
              <p>Tipo de Documento:</p>
              @include('coordPersonal/declaracionJuradaDocumentos') 
          
              @include('coordPersonal/declaracionJuradaTabla') 

              <div class="form-group row">
                <div class="col-sm-12" style="text-align:center">
                  <button name="count_click" type="button" class="btn btn-primary mr-2" onclick="agregarFila()">Agregar Fila</button>
                  <button type="button" class="btn btn-danger" onclick="eliminarFila()">Eliminar Fila</button>
                </div>
              </div>
                  <br><br>
              @if ($usuario->f2)
                <div class="form-group form-check">
                  @if ($usuario->f2->jubilado == 'on')
                    <input type="checkbox" class="form-check-input" name="jubilacion" checked>
                  @else
                    <input type="checkbox" class="form-check-input" name="jubilacion">
                  @endif
                  <label class="form-check-label" for="exampleCheck1">Es Jubilado?</label>
                  <div class="form-group row">
                    <p>fecha Jubilacion:</p>
                    <div class="col-sm-10">
                      <input type="date" name="fechaJubilacion" value="{{$usuario->f2->fecha_jubilacion}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <p>Resolución N°:</p>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="resPart1" value="{{$usuario->f2->resolucion_numero_uno}}">
                    </div>
                    <h1>-</h1>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="resPart2" value="{{$usuario->f2->resolucion_numero_dos}}">
                    </div>
                  </div>              
                </div>
              @else
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" name="jubilacion">
                  <label class="form-check-label" for="exampleCheck1">Es Jubilado?</label>
                  <div class="form-group row">
                    <p>fecha Jubilacion:</p>
                    <div class="col-sm-10">
                      <input type="date" name="fechaJubilacion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <p>Resolución N°:</p>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="resPart1">
                    </div>
                    <h1>-</h1>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="resPart2">
                    </div>
                  </div>              
                </div>           
              @endif
              
              <div class="form-group row">
                <div class="col-sm-12" style="text-align:center">
                  <div class="col-sm-6 alert alert-success  mx-auto" role="alert">
                    Opcional: puede agregar un dibujo de su firma en el recuadro o puede subir una foto de su firma 
                    con el boton "seleccionar archivo"
                  </div>
                  <canvas id='canvas' name='canvas' style='border: 1px solid black' width="150" height="90">
                    <p>Tu navegador no soporta canvas</p>
                  </canvas>
                  <input type='hidden' name='imagen' id='imagen'/><br>
                  <div class="col-6 mx-auto">
                    <input type="file" class="form-control-file" id="firmaImg" name="firmaImg">
                  </div>
                  <br>
                  <button type='button' class='btn btn-info' onclick='LimpiarTrazado()'>Borrar firma</button>
                  <input type='submit' name="boton_guardar" value='Guardar pdf' class='btn btn-info' data-toggle='confirmation' onclick='GuardarTrazado()'/>
                  <input type='submit' name="boton_ver" value='Ver pdf' class='btn btn-info' data-toggle='confirmation' onclick='GuardarTrazado()'/>
                </div>
              </div>
              <br><br>
            </form>
          </div>
      </div>
    </div> 
    <script type="text/javascript">
      /* Variables de Configuracion */
      var idCanvas='canvas';
      var idForm='formCanvas';
      var inputImagen='imagen';
      var estiloDelCursor='crosshair';
      var colorDelTrazo='##000000';
      var colorDeFondo='#fff';
      var grosorDelTrazo=2;
      /* Variables necesarias */
      var contexto=null;
      var valX=0;
      var valY=0;
      var flag=false;
      var imagen=document.getElementById(inputImagen); 
      var anchoCanvas=document.getElementById(idCanvas).offsetWidth;
      var altoCanvas=document.getElementById(idCanvas).offsetHeight;
      var pizarraCanvas=document.getElementById(idCanvas);
      /* Esperamos el evento load */
      window.addEventListener('load',IniciarDibujo,false);
      function IniciarDibujo(){
        /* Creamos la pizarra */
        pizarraCanvas.style.cursor=estiloDelCursor;
        contexto=pizarraCanvas.getContext('2d');
        contexto.fillStyle=colorDeFondo;
        contexto.fillRect(0,0,anchoCanvas,altoCanvas);
        contexto.strokeStyle=colorDelTrazo;
        contexto.lineWidth=grosorDelTrazo;
        contexto.lineJoin='round';
        contexto.lineCap='round';
        /* Capturamos los diferentes eventos */
        pizarraCanvas.addEventListener('mousedown',MouseDown,false);// Click pc
        pizarraCanvas.addEventListener('mouseup',MouseUp,false);// fin click pc
        pizarraCanvas.addEventListener('mousemove',MouseMove,false);// arrastrar pc
        pizarraCanvas.addEventListener('touchstart',TouchStart,false);// tocar pantalla tactil
        pizarraCanvas.addEventListener('touchmove',TouchMove,false);// arrastras pantalla tactil
        pizarraCanvas.addEventListener('touchend',TouchEnd,false);// fin tocar pantalla dentro de la pizarra
        pizarraCanvas.addEventListener('touchleave',TouchEnd,false);// fin tocar pantalla fuera de la pizarra
      }
      function MouseDown(e){
        flag=true;
        contexto.beginPath();
        valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
        contexto.moveTo(valX,valY);
      }
      function MouseUp(e){
        contexto.closePath();
        flag=false;
      }
      function MouseMove(e){
        if(flag){
          contexto.beginPath();
          contexto.moveTo(valX,valY);
          valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
          contexto.lineTo(valX,valY);
          contexto.closePath();
          contexto.stroke();
        }
      }
      function TouchMove(e){
        e.preventDefault();
        if (e.targetTouches.length == 1) { 
          var touch = e.targetTouches[0]; 
          MouseMove(touch);
        }
      }
      function TouchStart(e){
        if (e.targetTouches.length == 1) { 
          var touch = e.targetTouches[0]; 
          MouseDown(touch);
        }
      }
      function TouchEnd(e){
        if (e.targetTouches.length == 1) { 
          var touch = e.targetTouches[0]; 
          MouseUp(touch);
        }
      }
      function posicionY(obj) {
        var valor = obj.offsetTop;
        if (obj.offsetParent) valor += posicionY(obj.offsetParent);
        return valor;
      }
      function posicionX(obj) {
        var valor = obj.offsetLeft;
        if (obj.offsetParent) valor += posicionX(obj.offsetParent);
        return valor;
      }
      /* Limpiar pizarra */
      function LimpiarTrazado(){
        contexto=document.getElementById(idCanvas).getContext('2d');
        contexto.fillStyle=colorDeFondo;
        contexto.fillRect(0,0,anchoCanvas,altoCanvas);
      }
      /* Enviar el trazado */
      function GuardarTrazado(){
        imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
        document.forms[idForm].submit();
      }
   </script>
   <script> 
      var i = document.getElementById("cantidad").value
      function agregarFila(){
      var m = i++;
      document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td><input type="text" style="width : 25px; heigth : 25px" name=id'+m+' value='+m+'></td>'
                                                                        +'<td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name=dependencia'+m+'></td>'
                                                                        +'<td><input type="date" style="width : 100px; heigth : 60px; font-size: 60%;" name=fecha'+m+' value="00/00/00"></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=cargo'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=ag'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=cr'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 90px; heigth : 30px; font-size: 80%;" name=ant'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name=asignatura'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=h'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=n'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=c'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=d'+m+'></td>'
                                                                        +'<td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name=t'+m+'></td>'
                                                                        +'<td style="text-align:center"><input type="checkbox"  name=lunes'+m+'></td>'
                                                                        +'<td style="text-align:center"><input type="checkbox"  name=martes'+m+'></td>'
                                                                        +'<td style="text-align:center"><input type="checkbox"  name=mierc'+m+'></td>'
                                                                        +'<td style="text-align:center"><input type="checkbox"  name=jueves'+m+'></td>'
                                                                        +'<td style="text-align:center"><input type="checkbox"  name=viernes'+m+'></td>'
                                                                        +'<td style="text-align:center"><p name=firma'+m+'>........</p></td>'
                                                                        +'<input type="hidden" style="width : 25px; heigth : 25px" name=cantidad value='+m+'>'
      }

      function eliminarFila(){
        var table = document.getElementById("tablaprueba");
        var rowCount = table.rows.length;
        //console.log(rowCount);        
        if(rowCount <= 1)
          alert('No se puede eliminar el encabezado');
        else
          table.deleteRow(rowCount -1);
          i = i - 1;
      }

    </script>
@endsection

<!doctype html>
<head>
  {{--    --}}
  <script src="boostrap/js/bootstrap.js" defer></script>
  <script src="js/app.js" defer></script>
  <link href="boostrap/css/bootstrap.min.css" rel="stylesheet"> 
  <style>
       .cuadrado{
            width: 15px; 
            height: 15px; 
            border: 2px solid #555;
            text-align:center;
       }
       .documento{
            width: 70px; 
            height: 25px; 
            border: 2px solid #555;
       }

       .cuil{
            width: 100px; 
            height: 25px; 
            border: 2px solid #555;
       }
       .jubilacion{
            width: 60px; 
            height: 18px; 
            border: 2px solid #555;
       }
       .resolucion{
            width:  80px; 
            height: 18px; 
            border: 2px solid #555;
            
       }
      
       @media print {
          footer {page-break-after: always;}
        }

  </style>
</head>

<body>
    <table class="egt">
        <tr>     
          <td width="150"><img src="almacenamiento\documentos\DeclaracionJurada\IconoDeMinisteri.png" width="150" height="50"></td>     
          <td><font size=3>Planilla de Declaración Jurada de Cargos</font></td>        
        </tr>      
    </table> 
    <table>
      @include('coordPersonal/pdfF2Documentos')
    </table>
    <br>
    <table>
      <tr>
      <td width="80"><font size=2>Apellido y Nombre: {{$request->apellidoNombre}}</font></td>
      </tr>
    </table>
    <br>
    <table style="width:102%; height: 1px;">
      <tr>
        <th style="width:5px"><p style="font-size: 60%; text-align:center; visibility:hidden">ID</p></th>
        <th style="width:20px"><p style="font-size: 55%; text-align:center; visibility:hidden;">Dependencia o establecimiento</p></th>
        <th style="width:40px"><p style="font-size: 55%; text-align:center; visibility:hidden">fecha de ingreso</p></th>
        <th style="width:20px"><p style="font-size: 55%; text-align:center; visibility:hidden">cod. Cargo</p></th>
        <th style="width:5px"><p style="font-size: 55%; text-align:center; visibility:hidden">AG</p></th>
        <th style="width:5px"><p style="font-size: 55%; text-align:center; visibility:hidden">CR</p></th>
        <th style="width:5px"><p style="font-size: 55%; text-align:center; visibility:hidden">Ant.</p></th>
        <th style="width:20px"><p style="font-size: 55%; text-align:center; visibility:hidden">Asignatura o denominación del cargo</p></th>
        <th style="width:10px"><p style="font-size: 60%; text-align:center; visibility:hidden">H</p></th>
        <th style="width:10px"><p style="font-size: 60%; text-align:center; visibility:hidden">N</p></th>
        <th style="width:10px"><p style="font-size: 60%; text-align:center; visibility:hidden">C</p></th>
        <th style="width:10px"><p style="font-size: 60%; text-align:center; visibility:hidden">D</p></th>
        <th style="width:10px"><p style="font-size: 60%; text-align:center; visibility:hidden">T</p></th>
        <th style="width:20px"><p style="font-size: 60%; text-align:center; visibility:hidden">Lunes</p></th>
        <th style="width:20px"><p style="font-size: 60%; text-align:center; visibility:hidden">Martes</p></th>
        <th style="width:20px"><p style="font-size: 60%; text-align:center; visibility:hidden">Miérc</p></th>
        <th style="width:20px"><p style="font-size: 60%; text-align:center; visibility:hidden">Jueves</p></th>
        <th style="width:20px"><p style="font-size: 60%; text-align:center; visibility:hidden">Viernes</p></th>
        <th style="width:30px"><p style="font-size: 57%; text-align:center; visibility:hidden">Firma Responsable</p></th>
      </tr> 
      <tr>
        <td><p style="font-size: 70%; text-align:center">4</p></td>
        <td><p style="font-size: 70%; text-align:center">5</p></td>
        <td><p style="font-size: 70%; text-align:center">6</p></td>
        <td><p style="font-size: 70%; text-align:center">7</p></td>
        <td><p style="font-size: 70%; text-align:center">8</p></td>
        <td><p style="font-size: 70%; text-align:center">9</p></td>
        <td><p style="font-size: 70%; text-align:center">10</p></td>
        <td><p style="font-size: 70%; text-align:center">11</p></td>
        <td><p style="font-size: 70%; text-align:center">12</p></td>
        <td><p style="font-size: 70%; text-align:center">13</p></td>
        <td><p style="font-size: 70%; text-align:center">14</p></td>
        <td><p style="font-size: 70%; text-align:center">15</p></td>
        <td><p style="font-size: 70%; text-align:center">16</p></td>
        <td><p style="font-size: 70%; text-align:center">17</p></td>
        <td><p style="font-size: 70%; text-align:center">17</p></td>
        <td><p style="font-size: 70%; text-align:center">17</p></td>
        <td><p style="font-size: 70%; text-align:center">17</p></td>
        <td><p style="font-size: 70%; text-align:center">17</p></td>
        <td><p style="font-size: 70%; text-align:center">18</p></td>
      </tr>
    </table>
    <table style="width:102%;"  border=1>
      <tbody>
        <tr>
          <th style="width:5px; heigth : 25px; margin-top: 100px;"><p style="font-size: 60%; text-align:center">D</p></th>
          <th style="width:20px; heigth : 25px"><p style="font-size: 55%; text-align:center">Dependencia o establecimiento</p></th>
          <th style="width:20px; heigth : 25px"><p style="font-size: 55%; text-align:center">fecha de ingreso</p></th>
          <th style="width:20px; heigth : 25px"><p style="font-size: 55%; text-align:center">cod. Cargo</p></th>
          <th style="width:5px; heigth : 25px"><p style="font-size: 55%; text-align:center">AG</p></th>
          <th style="width:5px; heigth : 25px"><p style="font-size: 55%; text-align:center">CR</p></th>
          <th style="width:50px; heigth : 25px"><p style="font-size: 55%; text-align:center">Ant.</p></th>
          <th style="width:20px; heigth : 25px"><p style="font-size: 55%; text-align:center">Asignatura o denominación del cargo</p></th>
          <th style="width:10px; heigth : 25px"><p style="font-size: 60%; text-align:center">H</p></th>
          <th style="width:10px; heigth : 25px"><p style="font-size: 60%; text-align:center">N</p></th>
          <th style="width:10px; heigth : 25px"><p style="font-size: 60%; text-align:center">C</p></th>
          <th style="width:10px; heigth : 25px"><p style="font-size: 60%; text-align:center">D</p></th>
          <th style="width:10px; heigth : 25px"><p style="font-size: 60%; text-align:center">T</p></th>
          <th style="width:15px; heigth : 25px"><p style="font-size: 60%; text-align:center">Lunes</p></th>
          <th style="width:15px; heigth : 25px"><p style="font-size: 60%; text-align:center">Martes</p></th>
          <th style="width:15px; heigth : 25px"><p style="font-size: 60%; text-align:center">Miérc</p></th>
          <th style="width:15px; heigth : 25px"><p style="font-size: 60%; text-align:center">Jueves</p></th>
          <th style="width:15px; heigth : 25px"><p style="font-size: 60%; text-align:center">Viernes</p></th>
          <th style="width:20px; heigth : 25px"><p style="font-size: 57%; text-align:center">Firma Responsable</p></th>
        </tr>
        
        @for($i = 1; $i <= $request->cantidad ; $i++) 
          
            @include('coordPersonal/pdfF2tablaDeDatos')
            
        @endfor 
        
      </tbody>
    </table>
    <br>
    <div style="page-break-after: right;">  
      <table>
        <tr>        
          @include('coordPersonal/resolucion') 
        </tr> 
      </table>
    </div>
    <table>
      <tr>        
          <td width="100"><font size=2>Lugar:</font></td> 
          <td width="2"><font size=2>fecha:</font></td> 
          <td width="15"><font size=2>19</font></td> 
          <td width="15"><font size=2>del</font></td> 
          <td width="15"><font size=2>11</font></td> 
          <td width="15"><font size=2>de</font></td> 
          <td width="15"><font size=2>2020</font></td> 
      </tr> 
    </table>
    <div style="text-align:start">
    <font size=2>Declaro bajo juramento que todos los datos consignados son veraces y exactos, de acuerdo a mi leal saber y entender. Así mismo me notifico que cualquier falsedad, ocultamiento u omisión dará motivo a las más severas sanciones disciplinaria, como así también que estoy obligado a denunciar dentro de las cuarenta y ocho horas las modificaciones que se produzcan en el futuro.</font>
    </div>
    <div style="text-align:right;">
      {{--imagen firma--}}
    </div>
    <div style="text-align:right;">
      <font size=2 aling="left">.............................</font>
    </div>
    <div style="text-align:right;">
      <font size=2 aling="left">Firma del Agente</font>
    </div>
    <div style="text-align:start;">
      <p style="font-size: 70%">INSTRUCTIVO PARA EL LLENADO DE DECLARACIÓN JURADA DE CARGOS</p>
      <p style="font-size: 60%">“La misma será devuelta al Establecimiento en un lapso de 48 Hs de Recibida”.</p>
      <p style="font-size: 60%">** Se deberá completar en una fila (1 renglón) por cada división de Curso para los Docente con horas cátedras con sus correspondientes asignaturas, aunque sea el mismo curso y Establecimiento.-</p>
      <p style="font-size: 60%">1.	Marcar con una cruz el tipo de Documento.</p>
      <p style="font-size: 60%">2.	Consignar número de Documento exacto.</p>
      <p style="font-size: 60%">2.  BIS Consignar número de C.U.I.L. (clave única de identificación laboral)</p>
      <p style="font-size: 60%">3.	Consignar Apellido y Nombre completo</p>
      <p style="font-size: 60%">4.	Marcar con una D si son los cargos declarados y con una A si es el Alta.</p>
      <p style="font-size: 60%">5.	Consignar Nombre del Establecimiento Educacional donde presta servicios o nombre del área o dependencia si lo hace en otra repartición que no sea el M.E.C.yT.</p>
      <p style="font-size: 60%">6.	Consignar fecha de ingreso al cargo declarado y al cargo de alta.</p>
      <p style="font-size: 60%">7.	Consignar código de cargo dado de alta o declarado, debiendo coincidir el mismo con el que figura en el recibo de haberes en este último caso.</p>
      <p style="font-size: 60%">8.	Consignar el agrupamiento del cargo (A- administrativo, G- servicios Generales, T- técnico, D- docente).</p>
      <p style="font-size: 60%">9.	Consignar el carácter del cargo (T- titular, I- interino, S-suplente cuando el cargo es Docente y P- permanente, T- temporario, C- contratado, en los otros casos).</p>
      <p style="font-size: 60%">10.	Consignar antigüedad.</p>
      <p style="font-size: 60%">11.	Consignar nombre de la asignatura que dicta en caso de ser profesor o denominación del cargo en los otros casos.</p>
      <p style="font-size: 60%">12.	Consignar cantidad de horas cátedras si es profesor o cantidad de horas que cumple semanalmente en los otros casos.</p>
      <p style="font-size: 60%">13.	Consignar nivel en caso de ser docente (M-medio, S-superior , I-inicial, P- primario)</p>
      <p style="font-size: 60%">14.	Consignar en números el curso o grado.</p>
      <p style="font-size: 60%">15.	Consignar la división del curso o grado.</p>
      <p style="font-size: 60%">16.	Consignar turno en que presta servicios (M- mañana, T- tarde, V- vespertino, N- noche)</p>
      <p style="font-size: 60%">17.	Consignar horario de entrada y horario de salida de cada uno de los días a la semana en que presta servicios. En caso de ser docente con horas cátedras deberá usar una fila por cada división o curso.</p>
      <p style="font-size: 60%">18.	Firma de la persona responsable que certifica el cargo declarado, debiendo ser el director del Establecimiento o jefe de área.</p>
      <p style="font-size: 60%">19.	Colocar en casillero una S si el agente es jubilado y una N si no lo fuere.</p>
      <p style="font-size: 60%">20.	Consignar fecha a partir de la cual esta jubilado.</p>
      <p style="font-size: 60%">21.	Consignar número de resolución, decreto o disposición de jubilación.</p>
      <p style="font-size: 60%">22.	Consignar número de resolución de aceptación de renuncia por jubilación.</p>
    </div>

</body>
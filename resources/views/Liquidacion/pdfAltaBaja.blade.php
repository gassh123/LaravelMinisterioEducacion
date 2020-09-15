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
          <td width="150"><img src="public\IconoDeMinisteri.png" width="150" height="50"></td>     
          <td><font size=3>Planilla de Altas-Bajas</font></td>        
        </tr>      
    </table> 
    
    <br>
    <table>
      <tr>
      <!--<td width="80"><font size=2>Institución: {{$request->NombreInst}}</font></td>-->
      </tr>
    </table>
    <br>
    <table class="table table-bordered " >
                        <thead class="thead-dark">
                                <tr >
                                <th colspan="5"></th>
                                <th colspan="1" class="text-right-align">Grado</th>
                                <th colspan="3" class="text-center-align">Servicios en el mes</th>
                                
                                <th colspan="2"></th>
                                </tr>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">D.N.I</th>
                                <th scope="col" style='width: 20%;'>Apellido y Nombres</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Carácter</th>
                                <th scope="col">Sección</th>
                                <th scope="col">Desde</th>
                                <th scope="col">Hasta</th>
                                <th scope="col">Total</th>
                                <th scope="col" style='width: 20%;'>Motivo</th>
                                <th scope="col"  >Observaciones</th>
                                
                                </tr>
                        </thead>
                        
                        <tbody>
                               
                                @foreach ($altabaja as $item)

                                <tr>
                                <td>{{$item->num}}</td>
                                <td>{{$item->dni}}</td>
                                <td>{{$item->ApellidoNombre}}</td>
                                <td>{{$item->cargo}}</td>
                                <td>{{$item->caracter}}</td>
                                <td>{{$item->GradoSeccion}}</td>
                                <td>{{$item->Desde}}</td>
                                <td>{{$item->Hasta}}</td>
                                <td>{{$item->Total}}</td>
                                <td>{{$item->Motivo}}</td>
                                <td>{{$item->Observaciones}}</td>
                                </tr>
                                @endforeach

                                
                        </tbody>
                        
                        </table>
    

</body>
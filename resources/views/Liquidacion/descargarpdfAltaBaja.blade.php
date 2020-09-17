<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PLANILLA DE ALTA Y BAJAS</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
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
<th scope="row">{{$item->num}}</th>
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
</html>
<form method="POST" action="{{ route('PofPDF') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($institucion))
        <h5>Datos de la institución</h5>
        <label>{{$institucion->nombre}}</label>
        <label>(CUE: {{$institucion->cue}})</label><br>
        <label>{{$institucion->domicilio}}</label><br>
        <label>{{$institucion->localidad}}</label>
        <label>(Zona: {{$institucion->zona}})</label><br>
    @else
        <h5>Datos de Área</h5>
        <label>(Zona: {{$area->area}})</label><br>
    @endif
    <i>Por favor, complete los siguientes datos: </i><br>
    <label for="departamento">Departamento:</label>
              <select class="form-control" id="departamento" name="departamento">
                <option>Arauco</option>
                <option>Capital</option>
                <option>Castro Barros</option>
                <option>Chamical</option>
                <option>Chilecito</option>
                <option>Coronel Felipe Varela</option>
                <option>Famatina</option>
                <option>General Angel Vicente Peñaloza</option>
                <option>General Belgrano</option>
                <option>General Juan Facundo Quiroga</option>
                <option>General Lamadrid</option>
                <option>General Ocampo</option>
                <option>Genral San Martin</option>
                <option>Independencia</option>
                <option>Rosario Vera Peñaloza</option>
                <option>San Blas de los Sauces</option>
                <option>Sanagasta</option>
                <option>Vinchina</option>
              </select>
    <label for="ambito">Ámbito:</label>
              <select class="form-control" id="ambito" name="ambito">
                <option>Rural dispersa</option>
                <option>Rural aglomerado</option>
                <option>Urbanas</option>
              </select>
    <div style="overflow-y: auto;">
    <h4>Personal: </h4>
    <table border="1" class="table" id="tablaprueba">
        <thead class="thead-dark">
        <tr style="width: 70px; height: 10px;">
            <!--<th><p style="width: 10px; font-size: 70%">DOCUMENTO</p></th>
            <th><p style="width: 10px; font-size: 70%">CUIL</p></th>
            <th><p style="width: 10px; font-size: 70%">NOMBRE</p></th>
            <th><p style="width: 10px; font-size: 70%">CARGO</p></th>
            <th><p style="width: 10px; font-size: 70%">NOMENCLADOR</p></th>
            <th><p style="width: 10px; font-size: 70%">S. REVISTA</p></th>
            <th><p style="width: 10px; font-size: 70%">HORAS</p></th>
            <th><p style="width: 10px; font-size: 60%">ANTE</p></th>
            <th><p style="width: 10px; font-size: 70%">DIAS</p></th>
            <th><p style="width: 10px; font-size: 70%">CELULAR</p></th>
            <th><p style="width: 10px; font-size: 70%">FORMACIÓN</p></th>
            <th><p style="width: 10px; font-size: 70%">OBSERVACIONES</p></th>
            <th><p style="width: 10px; font-size: 70%">QUITAR PERSONA</p></th>-->
            <th><p style="width: 10px; font-size: 70%">APELLIDO Y NOMBRE</p></th>
            <th><p style="width: 10px; font-size: 70%">DNI</p></th>
            <th><p style="width: 10px; font-size: 70%">CUIL</p></th>
            <th><p style="width: 10px; font-size: 70%">DOMICILIO</p></th>
            <th><p style="width: 10px; font-size: 70%">CELULAR</p></th>
            <th><p style="width: 10px; font-size: 70%">AÑOS DE ANTIGÜEDAD</p></th>
            <th><p style="width: 10px; font-size: 70%">TURNO</p></th>
            <th><p style="width: 10px; font-size: 70%">FECHA DE NACIMIENTO</p></th>
            <th><p style="width: 10px; font-size: 70%">CARGO/MODALIDAD DE CONTRATACIÓN</p></th>
            <th><p style="width: 10px; font-size: 70%">FUNCION</p></th>
            <th><p style="width: 10px; font-size: 70%">FORMACIÓN</p></th>
            <th><p style="width: 10px; font-size: 70%">¿CON USO DE LICENCIA O JUSTIF. DE INASISTENCIA?</p></th>
            <th><p style="width: 10px; font-size: 70%">¿ESTÁ HABILITADO PARA TRABAJAR EN LA VIRTUALIDAD?</p></th>
            <th><p style="width: 10px; font-size: 70%">FECHA DE REINCORPORACIÓN</p></th>
            <th><p style="width: 10px; font-size: 70%">OBSERVACIONES</p></th>
        </tr>
            @foreach ($usuario->pof->pof_tabla_dato as $pof_tabla)
                <tr>
                    <!--<td><input type="text" style="width : 70px; font-size: 70%;" name='documento{{$pof_tabla->id}}' value='{{$pof_tabla->documento_tipo}}'></td>
                    <td><input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}cuil' value='{{$pof_tabla->cuil}}'></td>
                    <td><input type="text" style="width : 125px; font-size: 70%;" name='{{$pof_tabla->id}}apellido_nombre' value='{{$pof_tabla->apellido_nombre}}'></td>
                    <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}cargo' value='{{$pof_tabla->cargo}}'></td>
                    <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}nomenclador' value='{{$pof_tabla->nomenclador}}'></td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}revista' value=''></td>
                    <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}horas' value='{{$pof_tabla->horas}}'></td>
                    <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}antes' value='{{$pof_tabla->antes}}'></td>
                    <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}dias' value='{{$pof_tabla->dias}}'></td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}celular' value='{{$pof_tabla->celular}}'></td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}formacion' value='{{$pof_tabla->formacion}}'></td>
                    <td><input type="text" style="width : 125px; font-size: 80%;" name='{{$pof_tabla->id}}observacion' value='{{$pof_tabla->observaciones}}'></td>
                    <td><A href="{{ route('EliminarPersona', [$pof_tabla->pof_id, $pof_tabla->id]) }}" class="btn btn-danger" tabindex="-1">quitar</A>
                    *@foreach($personas as $persona2)
                        *@if($persona2->documento==$pof_tabla->documento_tipo)
                            <input type="hidden" name='{{$pof_tabla->id}}anti' value='{{$persona2->anti_adm}}'></td>
                        *@endif
                    *@endforeach-->
                    <td><input type="text" style="width : 125px; font-size: 70%;" name='{{$pof_tabla->id}}apellido_nombre' value='{{$pof_tabla->apellido_nombre}}'></td>
                    <td><input type="text" style="width : 70px; font-size: 70%;" name='documento{{$pof_tabla->id}}' value='{{$pof_tabla->documento_tipo}}'></td>
                    <td><input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}cuil' value='{{$pof_tabla->cuil}}'></td>
                    <td>
                        @foreach($adicional as $data)
                            @if($data->pof_tabla_datos_id==$pof_tabla->id)
                            <input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}domicilio' value='{{$data->domicilio}}'>
                            @endif
                        @endforeach
                    </td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}celular' value='{{$pof_tabla->celular}}'></td>
                    <td>@foreach($personas as $persona2)
                        @if($persona2->documento==$pof_tabla->documento_tipo)
                            <input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}anti' value='{{$persona2->anti_adm}}'></td>
                        @endif
                    @endforeach</td>
                    <td>@foreach($adicional as $data)
                            @if($data->pof_tabla_datos_id==$pof_tabla->id)
                            <input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}turno' value='{{$data->turno}}'>
                            @endif
                        @endforeach</td>
                    <td>@foreach($personas as $persona2)
                        @if($persona2->documento==$pof_tabla->documento_tipo)
                            <input type="date" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}nacimiento' value='{{$persona2->fnac}}'></td>
                        @endif
                    @endforeach</td>
                    <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}cargo' value='{{$pof_tabla->cargo}}'></td>
                    <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}nomenclador' value='{{$pof_tabla->nomenclador}}'></td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}formacion' value='{{$pof_tabla->formacion}}'></td>
                    <td>@foreach($adicional as $data)
                            @if($data->pof_tabla_datos_id==$pof_tabla->id)
                            <input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}licencia' value='{{$data->licencia}}'>
                            @endif
                        @endforeach</td>
                    <td>@foreach($adicional as $data)
                            @if($data->pof_tabla_datos_id==$pof_tabla->id)
                            <input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}virtualidad' value='{{$data->virtualidad}}'>
                            @endif
                        @endforeach</td>
                    <td>@foreach($adicional as $data)
                            @if($data->pof_tabla_datos_id==$pof_tabla->id)
                            <input type="date" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}reincorporacion' value='{{$data->reincorporacion}}'>
                            @endif
                        @endforeach</td>
                    <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}observaciones' value='{{$pof_tabla->observaciones}}'></td>
                </tr>
            @endforeach 
        </thead>
    </table></div>
    <input type="hidden" name="length" value="{{$pof_tabla->id}}">
    <button type="submit" class="btn btn-success" target="_blank">ver</button>
</form>
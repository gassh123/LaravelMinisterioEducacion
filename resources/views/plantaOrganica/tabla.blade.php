<form method="POST" action="{{ route('PofPDF') }}" enctype="multipart/form-data">
    @csrf
    <!--<label for="localidad">Localidad:</label>
              <select class="form-control" id="localidad" name="localidad">
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
              </select>-->
    <table border="1" class="table" id="tablaprueba">
        <thead class="thead-dark">
        <tr style="width: 70px; height: 10px;">
            <th><p style="width: 10px; font-size: 70%">DOCUMENTO</p></th>
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
            <th><p style="width: 10px; font-size: 70%">QUITAR PERSONA</p></th>
        </tr>
            @foreach ($usuario->pof->pof_tabla_dato as $pof_tabla)
                <tr>
                <td><input type="text" style="width : 70px; font-size: 70%;" name='documento{{$pof_tabla->id}}' value='{{$pof_tabla->documento_tipo}}'></td>
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
                {{$personas[$pof_tabla->id]->anti_doc}}
                @foreach($personas as $persona2)
                    @if($persona2->documento==$pof_tabla->documento_tipo)
                        <!--<input type="text" name='{{$pof_tabla->id}}anti' value='{{$persona2->anti_doc}}'></td>-->
                        {{$persona2->id}}
                    @endif
                @endforeach
                </tr>
            @endforeach 
        </thead>
    </table>
    <input type="hidden" name="length" value="{{$pof_tabla->id}}">
    <button type="submit" class="btn btn-success">ver</button>
</form>
<form method="POST" action="{{ route('PofPDF') }}" enctype="multipart/form-data">
    @csrf
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
                <td><input type="text" style="width : 70px; font-size: 70%;" name='{{$pof_tabla->id}}documento' value='{{$pof_tabla->documento_tipo}}'></td>
                <td><input type="text" style="width : 80px; font-size: 70%;" name='{{$pof_tabla->id}}cuil' value='{{$pof_tabla->cuil}}'></td>
                <td><input type="text" style="width : 125px; font-size: 70%;" name='{{$pof_tabla->id}}apellido_nombre' value='{{$pof_tabla->apellido_nombre}}'></td>
                <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}cargo' value='{{$pof_tabla->cargo}}'></td>
                <td><input type="text" style="width : 80px;  font-size: 80%;" name='{{$pof_tabla->id}}nomenclador' value='{{$pof_tabla->nomenclador}}'></td>
                <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}revista' value=''></td>
                <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}horas' value='{{$pof_tabla->horas}}'></td>
                <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}antes' value='{{$pof_tabla->antes}}'></td>
                <td><input type="text" style="width : 30px;  font-size: 80%;" name='{{$pof_tabla->id}}dias' value='{{$pof_tabla->dias}}'></td>
                <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}celular' value='{{$pof_tabla->celular}}'></td>
                <td><input type="text" style="width : 70px;  font-size: 80%;" name='{{$pof_tabla->id}}formacion' value=''></td>
                <td><input type="text" style="width : 125px; font-size: 80%;" name='{{$pof_tabla->id}}observacion' value='{{$pof_tabla->observaciones}}'></td>
                <td><A href="{{ route('EliminarPersona', [$pof_tabla->pof_id, $pof_tabla->id]) }}" class="btn btn-danger" tabindex="-1">quitar</A></td>
                </tr>
            @endforeach 
        </thead>
    </table>
    <button type="submit" class="btn btn-success">ver</button>
</form>
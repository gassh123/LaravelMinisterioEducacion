@if ($usuario->f2)

    
        
    

    <table border="1" class="table" id="tablaprueba">
        <thead class="thead-dark">
        <tr style="width: 70px; height: 25px;">
            <th><p style="font-size: 70%">ID</p></th>
            <th><p style="font-size: 60%">Dependencia o Establecimiento</p></th>
            <th><p style="font-size: 60%">Fecha de Ingreso</p></th>
            <th><p style="font-size: 60%">Cod. Cargo</p></th>
            <th><p style="font-size: 70%">AG</p></th>
            <th><p style="font-size: 70%">CR</p></th>
            <th><p style="font-size: 70%">Ant.</p></th>
            <th><p style="font-size: 60%">Asignatura o denominación del Cargo</p></th>
            <th><p style="font-size: 70%">H</p></th>
            <th><p style="font-size: 70%">N</p></th>
            <th><p style="font-size: 70%">C</p></th>
            <th><p style="font-size: 70%">D</p></th>
            <th><p style="font-size: 70%">T</p></th>
            <th><p style="font-size: 60%">Lunes</p></th>
            <th><p style="font-size: 60%">Martes</p></th>
            <th><p style="font-size: 60%">Mierc.</p></th>
            <th><p style="font-size: 60%">Jueves</p></th>
            <th><p style="font-size: 60%">Viernes</p></th>
            <th><p style="font-size: 60%">Firma Del Responsable</p></th>
        </tr>
        
        @foreach ($usuario->f2->f2_dato as $datoTabla)
        
            <tr>
            <td><input type="text" style="width : 25px; heigth : 25px" name='id{{$datoTabla->id_datos}}' value='{{$datoTabla->id_datos}}'></td>
            <td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name='dependencia{{$datoTabla->id_datos}}' value='{{$datoTabla->establecimiento}}'></td>
            <td><input type="date" style="width : 100px; heigth : 60px; font-size: 60%;" name='fecha{{$datoTabla->id_datos}}' value='{{$datoTabla->fecha_ingreso}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='cargo{{$datoTabla->id_datos}}' value='{{$datoTabla->cod_cargo}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='ag{{$datoTabla->id_datos}}' value='{{$datoTabla->ag}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='cr{{$datoTabla->id_datos}}' value='{{$datoTabla->cr}}'></td>
            <td><input type="text" style="width : 90px; heigth : 30px; font-size: 80%;" name='ant{{$datoTabla->id_datos}}' value='{{$datoTabla->ant}}'></td>
            <td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name='asignatura{{$datoTabla->id_datos}}' value='{{$datoTabla->asignatura}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='h{{$datoTabla->id_datos}}' value='{{$datoTabla->h}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='n{{$datoTabla->id_datos}}' value='{{$datoTabla->n}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='c{{$datoTabla->id_datos}}' value='{{$datoTabla->c}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='d{{$datoTabla->id_datos}}' value='{{$datoTabla->d}}'></td>
            <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='t{{$datoTabla->id_datos}}' value='{{$datoTabla->t}}'></td>
            <td style="text-align:center"><input type="checkbox"  name='lunes{{$datoTabla->id_datos}}' @if($datoTabla->lunes=='on') checked @endif></td>
            <td style="text-align:center"><input type="checkbox"  name='martes{{$datoTabla->id_datos}}' @if($datoTabla->martes=='on') checked @endif'></td>
            <td style="text-align:center"><input type="checkbox"  name='mierc{{$datoTabla->id_datos}}' @if($datoTabla->miercoles=='on') checked @endif></td>
            <td style="text-align:center"><input type="checkbox"  name='jueves{{$datoTabla->id_datos}}' @if($datoTabla->jueves=='on') checked @endif></td>
            <td style="text-align:center"><input type="checkbox"  name='viernes{{$datoTabla->id_datos}}' @if($datoTabla->viernes=='on') checked @endif></td>
            <td style="text-align:center"><p name='firma1'>........</p></td>
            @php
                $cantidad= $usuario->f2->f2_dato->last()->id_datos + 1;
            @endphp
            
            <input type="hidden" style="width : 25px; heigth : 25px" id='cantidad' name='cantidad' value='{{$cantidad}}'>
            
            </tr>
        @endforeach
        
        </thead>
        <tbody></tbody>
    </table>



@else
    <table border="1" class="table" id="tablaprueba">
        <thead class="thead-dark">
        <tr style="width: 70px; height: 25px;">
            <th><p style="font-size: 70%">ID</p></th>
            <th><p style="font-size: 60%">Dependencia o Establecimiento</p></th>
            <th><p style="font-size: 60%">Fecha de Ingreso</p></th>
            <th><p style="font-size: 60%">Cod. Cargo</p></th>
            <th><p style="font-size: 70%">AG</p></th>
            <th><p style="font-size: 70%">CR</p></th>
            <th><p style="font-size: 70%">Ant.</p></th>
            <th><p style="font-size: 60%">Asignatura o denominación del Cargo</p></th>
            <th><p style="font-size: 70%">H</p></th>
            <th><p style="font-size: 70%">N</p></th>
            <th><p style="font-size: 70%">C</p></th>
            <th><p style="font-size: 70%">D</p></th>
            <th><p style="font-size: 70%">T</p></th>
            <th><p style="font-size: 60%">Lunes</p></th>
            <th><p style="font-size: 60%">Martes</p></th>
            <th><p style="font-size: 60%">Mierc.</p></th>
            <th><p style="font-size: 60%">Jueves</p></th>
            <th><p style="font-size: 60%">Viernes</p></th>
            <th><p style="font-size: 60%">Firma Del Responsable</p></th>
        </tr>
        <td><input type="text" style="width : 25px; heigth : 25px" name='id1' value='1'></td>
        <td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name='dependencia1'></td>
        <td><input type="date" style="width : 100px; heigth : 60px; font-size: 60%;" name='fecha1' value="00/00/00"></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='cargo1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='ag1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='cr1'></td>
        <td><input type="text" style="width : 90px; heigth : 30px; font-size: 80%;" name='ant1'></td>
        <td><input type="text" style="width : 90px; height: 25px; font-size: 80%;" name='asignatura1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='h1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='n1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='c1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='d1'></td>
        <td><input type="text" style="width : 30px; heigth : 30px; font-size: 80%;" name='t1'></td>
        <td style="text-align:center"><input type="checkbox"  name='lunes1'></td>
        <td style="text-align:center"><input type="checkbox"  name='martes1'></td>
        <td style="text-align:center"><input type="checkbox"  name='mierc1'></td>
        <td style="text-align:center"><input type="checkbox"  name='jueves1'></td>
        <td style="text-align:center"><input type="checkbox"  name='viernes1'></td>
        <td style="text-align:center"><p name='firma1'>........</p></td>
        <input type="hidden" style="width : 25px; heigth : 25px" name='cantidad' id='cantidad' value='2'>
        </thead>
        <tbody></tbody>
    </table>
@endif
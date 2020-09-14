<td><font size=2>Es Jubilado/a:</font></td>
@switch($request->jubilacion)
    @case("on")
        <td width="20"><div class="cuadrado" style="text-align:center"><span style="vertical-align: 35%; font-size: 90%;">X</span><font size=2></font></div></td> 
        @break
    @default
        <td width="20"><div class="cuadrado" style="text-align:center"></div></td> 
@endswitch
<td><font size=2>fecha de jubilación:</font></td> 
<td width="20"><div class="jubilacion" style="text-align:center"><font size=1>{{$request->fechaJubilacion}}</font></div></td>
<td width="60"></td>
<td><font size=2>Resolución N°:</font></td> 
<td width="20"><div class="jubilacion" style="text-align:center"><font size=1>{{$request->resPart1}}</font></div></td>
<td width="20"><div class="resolucion" style="text-align:center"><font size=1>{{$request->resPart2}}</font></div></td>
<td width="30"></td>
<td><h4>F2</h4></td>
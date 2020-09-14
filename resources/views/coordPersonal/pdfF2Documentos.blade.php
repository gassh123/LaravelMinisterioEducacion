<tr>     
    <td width="80"><font size=2>Tipo de Documento:</font></td>   
    @switch($request->numero)
        @case("DNI")
            <td><font size=1>D.N.I</font></td>
            <td width="20"><div class="cuadrado"><span style="vertical-align: 35%; font-size: 90%;">X</span></div></td>
            <td><font size=1>L.E</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>    
            <td><font size=1>L.C</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>  
            @break

        @case("L.E")
            <td><font size=1>D.N.I</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>
            <td><font size=1>L.E</font></td> 
            <td width="20"><div class="cuadrado"><span style="vertical-align: 35%; font-size: 90%;">X</span></div></td> 
            <td><font size=1>L.C</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>
            @break

        @case("L.C")
            <td><font size=1>D.N.I</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>
            <td><font size=1>L.E</font></td> 
            <td width="20"><div class="cuadrado" style="text-align:center"><font size=1></font></div></td>
            <td><font size=1>L.C</font></td>
            <td width="20"><div class="cuadrado"><span style="vertical-align: 35%; font-size: 90%;">X</span></div></td>
            @break
    @endswitch
    <td width="20"><font size=2>Numero Documento:</font></td>   
<td width="60"><div class="documento" style="text-align:center"><font size=2>{{$request->numDoc}}</font></div></td> 
    <td width="20"><font size=2>Numero C.U.I.L:</font></td> 
<td width="70"><div class="cuil" style="text-align:center"><font size=2>{{$request->numCUIL}}</font></div></td>
</tr>
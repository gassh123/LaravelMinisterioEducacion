
    @if ($request->input('id'.$i) != NULL)
        <tr>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('id'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('dependencia'.$i)}}</p></th>
            <th><p style="font-size: 45%; text-align:center; margin-top: 10px;">{{$request->input('fecha'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('cargo'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('ag'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('cr'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('ant'.$i)}}</p></th>
            <th><p style="font-size: 55%; text-align:center; margin-top: 10px;">{{$request->input('asignatura'.$i)}}</p></th>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('h'.$i)}}</p></th>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('n'.$i)}}</p></th>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('c'.$i)}}</p></th>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('d'.$i)}}</p></th>
            <th><p style="font-size: 60%; text-align:center; margin-top: 10px;">{{$request->input('t'.$i)}}</p></th>
            <th style="text-align:center; margin-top: 10px;">@if($request->input('lunes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
            <th style="text-align:center; margin-top: 10px;">@if($request->input('martes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
            <th style="text-align:center; margin-top: 10px;">@if($request->input('mierc'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
            <th style="text-align:center; margin-top: 10px;">@if($request->input('jueves'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
            <th style="text-align:center; margin-top: 10px;">@if($request->input('viernes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
            <th style="text-align:center; margin-top: 10px;">@if($request->firmaImg)<img src="{{$request->firmaImg}}" border="1" style="width:  50px; height: 30px;">@else<img src="{{$request->imagen}}" border="1" style="width:  50px; height: 30px;">@endif</th>
        </tr>
        @endif
    
    
    




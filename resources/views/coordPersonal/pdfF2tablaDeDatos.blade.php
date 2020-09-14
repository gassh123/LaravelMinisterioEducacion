    <th><p style="font-size: 60%; text-align:center">{{$request->input('id'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('dependencia'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('fecha'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('cargo'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('ag'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('cr'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('ant'.$i)}}</p></th>
    <th><p style="font-size: 55%; text-align:center">{{$request->input('asignatura'.$i)}}</p></th>
    <th><p style="font-size: 60%; text-align:center">{{$request->input('h'.$i)}}</p></th>
    <th><p style="font-size: 60%; text-align:center">{{$request->input('n'.$i)}}</p></th>
    <th><p style="font-size: 60%; text-align:center">{{$request->input('c'.$i)}}</p></th>
    <th><p style="font-size: 60%; text-align:center">{{$request->input('d'.$i)}}</p></th>
    <th><p style="font-size: 60%; text-align:center">{{$request->input('t'.$i)}}</p></th>
    <th style="text-align:center">@if($request->input('lunes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
    <th style="text-align:center">@if($request->input('martes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
    <th style="text-align:center">@if($request->input('mierc'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
    <th style="text-align:center">@if($request->input('jueves'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
    <th style="text-align:center">@if($request->input('viernes'.$i)=='on')<img src="almacenamiento\documentos\DeclaracionJurada\tick.png" width="15" height="15"></p>@else<p style="font-size: 60%; text-align:center"></p>@endif</th>
    <th style="text-align:center"><img src="{{$request->imagen}}" border="1" style="width:  50px; height: 80px;"></th>




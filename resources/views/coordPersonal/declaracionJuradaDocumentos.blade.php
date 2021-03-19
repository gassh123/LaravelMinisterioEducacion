@if ($usuario->f2)
    @switch($usuario->f2->tipo_documento)
        @case("DNI")
            <input class="form-check-input" type="radio" name="numero"  id="DNI" value="DNI" checked>
            <label class="form-check-label" for="DNI">
            DNI
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  id="L.E" value="L.E">
            <label class="form-check-label" for="L.E">
            L.E
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  value="L.C">
            <label class="form-check-label" for="L.C">
            L.C
            </label>
            @break
        @case("L.E")
            <input class="form-check-input" type="radio" name="numero"  id="DNI" value="DNI">
            <label class="form-check-label" for="DNI">
            DNI
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  id="L.E" value="L.E" checked>
            <label class="form-check-label" for="L.E">
            L.E
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  value="L.C">
            <label class="form-check-label" for="L.C">
            L.C
            </label>
            @break

        @case("L.C")
            <input class="form-check-input" type="radio" name="numero"  id="DNI" value="DNI">
            <label class="form-check-label" for="DNI">
            DNI
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  id="L.E" value="L.E">
            <label class="form-check-label" for="L.E">
            L.E
            </label><br>

            <input class="form-check-input" type="radio" name="numero"  value="L.C" checked>
            <label class="form-check-label" for="L.C">
            L.C
            </label>
            @break
    @default
    @endswitch
    <br>
    <label for="exampleInputEmail1">Numero del Documento</label>
    <input type="text" class="form-control" name="numDoc" style="width: 170px; height: 25px;" value="{{$usuario->f2->numero_documento}}">
    <small id="emailHelp" class="form-text text-muted">Agregue su Documento</small>

    <label for="exampleInputEmail1">Numero de CUIL</label>
    <input type="text" class="form-control" name="numCUIL" style="width: 170px; height: 25px;" value="{{$usuario->f2->numero_cuil}}">
    <small id="emailHelp" class="form-text text-muted">Agregue su CUIL</small>

    <label for="exampleInputEmail1">Nombre y apellido</label>
    <input type="text" class="form-control" name="apellidoNombre" style="width: 170px; height: 25px;" value="{{$usuario->f2->nombre_apellido}}">
    <small id="emailHelp" class="form-text text-muted">Agregue su nombre y apellido</small>
    <br>
  
@else
    <input class="form-check-input" type="radio" name="numero"  id="DNI" value="DNI" checked>
    <label class="form-check-label" for="DNI">
    DNI
    </label><br>

    <input class="form-check-input" type="radio" name="numero"  id="L.E" value="L.E">
    <label class="form-check-label" for="L.E">
    L.E
    </label><br>

    <input class="form-check-input" type="radio" name="numero"  value="L.C">
    <label class="form-check-label" for="L.C">
    L.C
    </label>
    <br>
    <label for="exampleInputEmail1">Numero del Documento</label>
    <input type="text" class="form-control" name="numDoc" style="width: 170px; height: 25px;">
    <small id="emailHelp" class="form-text text-muted">Agregue su Documento</small>

    <label for="exampleInputEmail1">Numero de CUIL</label>
    <input type="text" class="form-control" name="numCUIL" style="width: 170px; height: 25px;">
    <small id="emailHelp" class="form-text text-muted">Agregue su CUIL</small>

    <label for="exampleInputEmail1">Nombre y apellido</label>
    <input type="text" class="form-control" name="apellidoNombre" style="width: 170px; height: 25px;">
    <small id="emailHelp" class="form-text text-muted">Agregue su nombre y apellido</small>
    <br>  
@endif




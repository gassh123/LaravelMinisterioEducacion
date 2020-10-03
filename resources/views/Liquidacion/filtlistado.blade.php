@extends('layouts.app')
@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">-->
        <div class="col-md-20">



  <form action="" > 
        
        <br>
        <!--TABLA ALTAS Y BAJAS-->

        
        <div class="card">
        <div class="card-header"><b>Buscar datos en planilla </b>
                        </div>
                      <div>
      
       
       </div>
       <br>
            
       <nav class="navbar navbar-light ">
       <div class="col-md" style='text-align:center;'>
      <label for="">Tipo de planilla</label>
  <br>
 
  <select name="elegirplanilla" >
       
       <option value="" disabled selected>Planillas</option>
       
               <option value="AltaBaja">Alta-Baja</option>
               <option value="Novedades">Novedades</option>
               <option value="OtrasNovedades">Otras Novedades</option>
      
       
      </select>
      
     <br><br>
      <button class="btn btn-outline-success" type="submit">Search</button>
     </div></div>
  
  
</nav>
</div>
       </div>
      

       </div>

<br>

</div>
</form>     
@endsection
@extends('layouts/template')
@section('seccion')
<div class="box d-flex col-md-12 my-3">
  <form method="GET" class="form-inline p-0 col-md-12 justify-content-center needs-validation" novalidate  action="{{route('list_show')}}" >
    @csrf
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" ></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Buscar..." name="name" id="name" >
      </div>
    </div>
    <div class="form-group col-md-2">
      <select name="status" class="input-group custom-select">
        <option selected="true" disabled="disabled">Todos los status</option>
        <option value="Destacado">Destacado</option>
        <option value="En Renta">En renta</option>
        <option value="En Venta">En venta</option>
        <option value="Predio">Predio</option>
        <option value="Propiedad">Propiedad</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <select name="city" class="input-group custom-select">
        <option selected="true" disabled="disabled">Todas las ciudades</option>
        <option value="Cancún">Cancún</option>
        <option value="Playa del carmen">Playa del carmen</option>
        <option value="Puerto morelos">Puerto morelos</option>
        <option value="Tulum">Tulum</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="text" name="price" id="price" placeholder="Precio" class="form-control" placeholder="Precio" >
    </div>
    <div class="form-group col-md-2">
      <input id="submit" class="btn col span_8 first" type="submit" value="Búsqueda">
    </div>
  </form>
</div>

<script type="text/javascript">
 // var cursos = ['php','javascript','sql','mysql','js','ruby','phyton','reac','java'];
$("#name").autocomplete({
 // source:cursos
  source: function(request,response){
    $.ajax({
        url:"{{route('list_show')}}",
        dataType: "json",
        data:{
          term: request.term
        },
        success: function(data){
          response(data)
        }
    });
  } 
});
</script>
@endsection
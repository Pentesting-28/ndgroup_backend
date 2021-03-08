<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Information Email {{ $request['name'] }} https://ndgroup.mx/</title>  
</head>
<body>

<style type="text/css"> 
.container{margin:0px auto;padding: 0 3rem 3rem ;display: inline-block;width: 90%;}
div .list-group{ width: 100%; }
.list-group, .list-group *{display:inline-block;float: left;margin: 0px;padding: 0px;list-style: none;}
.menu{width: 90%;}
.list-group-item{padding:5px 0px 5px 10px;background-color: #fff;border-bottom: 1px solid rgba(0,0,0,0.125);margin: 6px 0px;border-left: 1px solid rgba(0,0,0,0.125);font-size: 17px;}
.list-group-item * { margin-bottom:0px; } 
.list-group li{width: 90%;}  
.subtitle{color: #004085;background-color: #cce5ff;border-color: #b8daff;padding: 0.75rem 1.25rem;margin-top:1rem;border: 1px solid transparent; }
.properti{margin: 1rem 0px 1rem;}
.title{width:100%; font-size:21px; margin: 1rem 0; }
</style> 

<div class="container" >
   <ul class="list-group">
        <div class="menu" > 
            <img class="logo" src="{{asset('/img/logo.jpg')}}" alt="{{$request['name']}} Acaba de contactar desde {{route('inicio')}}" />            
            <h1 class="title" ><label>{{$request['name']}}&nbsp;acaba de contactar desde &nbsp;</label><a target="_blank" href="{{route('inicio')}}">{{route('inicio')}}</a></h1>
        </div>
        <li class="subtitle" >
            <div>
                 <h3>Datos de la persona.</h3>    
            </div>           
        </li>
        <li class="list-group-item">
            <h5>Nombre:</h5>
            <p>&nbsp;{{$request['name']}}</p>
        </li>
        <li class="list-group-item">
            <h5>Correo: </h5>
            <p>&nbsp;{{$request['email']}}</p>
        </li>
        <li class="list-group-item">
            <h5>Numero de Teléfono:</h5>
            <p>&nbsp;{{ $request['phone']}}</p>
        </li>
        <li class="list-group-item">
            <h5>Mensaje redactado:</h5>
            <p>&nbsp;{{$request['content']}}</p>
        </li>
        <li class="subtitle" >
            <div>
                 <h3>Datos de la propiedad.</h3>    
            </div>
        </li>
         <img class="properti" src="{{asset($data->images[0]['main_img'])}}" alt="{{$request['name']}} Acaba de contactar desde {{route('inicio')}}" />
        <li class="list-group-item">
            <h5>#ID:</h5>
            <p>&nbsp;{{$data->id}}</p>
        </li>
        <li class="list-group-item">
            <h5>Nombre:</h5>
            <p>&nbsp;{{$data->properti}}</p>
        </li>
        <li class="list-group-item">
            <h5>Mensaje:</h5>
            <p>&nbsp;{{$request['current']}}</p>
        </li>
        <li class="list-group-item">
            <h5>Ciudad:</h5>
            <p>&nbsp;{{$data->city}}</p>
        </li>
        <li class="list-group-item">
            <h5>Dirección:</h5>
            <p>&nbsp;{{$data->adress}}</p>
        </li>
    </ul>
</div>

</body>
</html>
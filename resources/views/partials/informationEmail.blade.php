<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Information Email {{ $request['name'] }} https://ndgroup.mx/</title>
<style type="text/css">
body { -webkit-text-size-adjust: none;-ms-text-size-adjust: none;margin: 0;padding: 0;}
.title_t { border-top: 1px solid #f2f2f2;color: rgb(153, 153, 153);font-size: 12px;font-weight: 400;padding-top: 10px;text-transform:uppercase; }
.container-padding{ background:#fff; padding:0px 30px 0px 30px; font:normal 13px/17px tahoma; color:#333; border: 1px solid #f2f2f2; }
.from{ font:normal 16px/24px tahoma; color:#666; text-transform:uppercase; text-align:center; margin-bottom:20px; }
.logo{ width: 170px; }
table {border-spacing: 0;}
table td {border-collapse: collapse;}
@media screen and (max-width: 600px) {
    table[class="container"] {
    width: 95% !important;
    }
}
@media screen and (max-width: 480px) {
    td[class="container-padding"] {
    padding-left: 12px !important;
    padding-right: 12px !important;
    }
}
</style>
</head>
<body>
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#fbfbfb">
        <tr>
            <td align="center" valign="top" >
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#fff">
                    <tr>
                        <td class="container-padding">
                           <div align="center">
                                <img class="logo" src="https://ndgroup.mx/img/logo.jpg" alt=" {{ $request['name'] }} Acaba de contactar desde https://ndgroup.mx/" />
                            </div>
                            <div class="from"> {{ $request['name'] }} Acaba de contactar desde 
                                <a target="_blank" href="https://ndgroup.mx/">ndgroup.mx </a>
                            </div>
                            <h3>Solicitar más Información</h3><br>
                            <p>Datos de la persona.</p>
                            <h3 class="title_t">Nombre:</h3>
                            <p> {{ $request['name'] }}</p>
                            <h3 class="title_t">Correo:</h3>
                            <p> {{ $request['email'] }}</p>
                            <h3 class="title_t">Numero de Teléfono:</h3>
                            <p> {{ $request['phone'] }}</p>
                            <h3 class="title_t">Mensaje redactado:</h3>
                            <p> {{ $request['content'] }}</p>
                            <hr>
                            <h3 class="title_t">Actual:</h3>
                            <p> {{ $request['current'] }}</p>
                            <hr>
                            <img class="logo" src="https://ndgroup.mx/{{ substr($data->images[0]['main_img'], 42) }}" alt=" {{ $data->propertis }} Acaba de contactar desde https://ndgroup.mx/" />
                            <p>Datos de la propiedad.</p>
                            <h3 class="title_t">#Id:</h3>
                            <p> {{ $data->id }}</p>
                            <h3 class="title_t">Nombre:</h3>
                            <p> {{ $data->properti }}</p>
                            <h3 class="title_t">Ciudad:</h3>
                            <p> {{ $data->city }}</p>
                            <h3 class="title_t">Dirección:</h3>
                            <p> {{ $data->adress }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
</body>
</html>
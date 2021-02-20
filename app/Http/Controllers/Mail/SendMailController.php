<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Mail;

class SendMailController extends Controller
{

  public function sendmail( Request $request)
  {
    $request->validate([
      'name'  => 'required',
      'email' => 'required|email',
      'phone' => 'required'
    ]);
    return response()->json([
        'data' => 'todo bien '
    ],200);
    Mail::send('partials.email',$request->all(), function($header){ 
      $header->subject('Nueva Consulta desde https://ndgroup.mx/'); //asunto 
      $header->to('direccion@ndgroup.mx'); //correo destino
    });
    Session::flash('email','¡Mensaje enviado correctamente!'); 
    return back();
  }

  // public function sendmail( Request $res) 
  // {

  //   $res->validate([
  //       'name' => 'required',
  //       'email' => 'required|email',
  //       'phone' => 'required'
  //   ]);

  //   Mail::send('partials.email',$res->all(), function($header){ 

  //       $header->subject('Nueva Consulta desde https://ndgroup.mx/'); //asunto 
  //       //$header->to('direccion@ndgroup.mx'); //correo destino
  //       $header->to('mpenav28@gmail.com'); //correo destino
  //   });
  
  //   Session::flash('email','¡Mensaje enviado correctamente!'); 
  //   return back();
  // }
}

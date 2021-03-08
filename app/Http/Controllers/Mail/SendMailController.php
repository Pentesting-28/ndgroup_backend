<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Mail\SendMailInformation;
use App\Mail\SendMailContact;
use Exception;
use Session;
use Mail;

class SendMailController extends Controller
{

  public function sendMailInformation( Request $request )
  {
    try {
      $request->validate([
        'current' => 'required',
        'name'    => 'required',
        'email'   => 'required|email',
        'phone'   => 'required',
        'content' => 'required',
        'property_id' => 'required'
      ]);
      $data = Property::when($request->has('property_id'), function ( $query ) use ( $request ) {
                          $query->whereId( $request->property_id )
                                ->with('images:id,property_id,main_img')
                                ->select('id','properti','city','adress')
                                ->has('images');
                        })
                        ->first();
      if(!$data){throw new Exception('Propiedad no encontrada', 504);}
      Mail::to('direccion@ndgroup.mx')->send(new SendMailInformation($request->all(), $data));
      Session::flash('email','¡Mensaje enviado correctamente!'); 
      return back();
    } catch (Exception $e) {
        return response()->json([
          'error' => 'SendMail.sendmail.failed',
          'message' => $e->getMessage()
        ], 442);
    }
  }

  public function sendMailContact( Request $request )
  {
    try {
      $request->validate([
        'name'    => 'required',
        'email'   => 'required|email',
        'phone'   => 'required',
        'content' => 'required',
      ]);
      Mail::to('direccion@ndgroup.mx')->send(new SendMailContact($request->all()));
      Session::flash('email','¡Mensaje enviado correctamente!'); 
      return back();
    } catch (Exception $e) {
        return response()->json([
          'error' => 'SendMail.sendmail.failed',
          'message' => $e->getMessage()
        ], 442);
    }
  }
}
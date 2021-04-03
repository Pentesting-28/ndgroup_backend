<?php

namespace App\Http\Controllers;

use App;
use DB;
use Session;
use Exception;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateProyect;

class PropertyController extends Controller
{
  //inhabilitamos URL publico
  public function __construct(){
    $this->middleware('auth')->only('crear','editar','store','update','delete');
  }

  public function about(){
    try {
      $title = 'Acerca de nosotros';
      return view('about', compact('title'));
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.about.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function blog(){
    try {
      $title = 'Blog';
      return view('blog', compact('title'));
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.blog.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }
   


  public function inicio(){
    try {
      $title = 'Inicio';
    	return view('home', compact('title'));
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.inicio.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }



  public function list_show(){

    try {
      $title = 'Inicio';
    	return view('home', compact('title'));
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.inicio.failed',
        'error: ' => $e->getMessage()
      ];
    }

  } 


  public function contact(){ 
    try {
      $title = 'Contacto'; 
      return view('contact', compact('title')); 
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.contact.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }
}

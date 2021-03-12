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

  public function list_show(Request $request){ 
    try {
      $data = Property::when($request->has('name') , function ( $query ) use ( $request ) {
                          $query->where( 'properti','LIKE',"%$request->name%" );
                      })
                      ->when($request->has('status') , function ( $query ) use ( $request ) {
                          $query->where( 'status', $request->status );
                      })
                      ->when($request->has('city') , function ( $query ) use ( $request ) {
                          $query->where( 'city', $request->city );
                      })
                      ->when($request->has('price') , function ( $query ) use ( $request ) {
                       $query->whereHas('payments', function ( $query ) use ( $request ){
                               $query->where('price','LIKE',"%$request->price%");
                         });
                      })
                      ->select(['id','properti','residency','adress','status','city','created_at'])
                      ->with(['coordinates:id,property_id,latitude,length','payments:id,property_id,coin,price','images:id,property_id,thumbnail'])
                      ->has('payments')
                      ->has('images')
                      ->orderBy('id', 'DESC')
                      ->paginate(12);
    	return view('details.list_show', compact('data') );
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.list_show.failed',
        'error: ' => $e->getMessage()
      ];
    }
    
  }

  public function search(Request $request){
    try {
      $term = $request->get('term');
      $querys = Property::where('properti','LIKE', '%'.$term.'%')->get();
      $data = [];
      foreach ($querys as $query ){
        $data[] = [        
          'label' => $query->properti
        ];     
      }
      return $data;
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.search.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function crear(){
    try {
      return view('details.create');
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.crear.failed',
        'error: ' => $e->getMessage()
      ];
    }
  } 

  public function store(CreateRequest $request){
    try {
      DB::beginTransaction();
      $request->validated();
      $property = Property::create([
        'properti'  => $request->properti,
        'city'      => $request->city,
        'residency' => $request->residency,
        'adress'    => $request->adress,
        'url'       => $request->url,
        'status'    => $request->status
      ]);
      $property->payments()->create([
        'price' => $request->price,
        'coin'  => $request->coin
      ]);
      $property->characteristics()->create([
        'features'    => $request->features,
        'amenities'   => $request->amenities,
        'specialf'    => $request->specialf,
        'information' => $request->information,
        'rooms'       => $request->rooms,
        'bathrooms'   => $request->bathrooms,
        'size'        => $request->size,
        'details'     => $request->details
      ]);
      $property->coordinates()->create([
        'latitude' => $request->latitude,
        'length'   => $request->length
      ]);
      $property->contacts()->create([
        'email' => $request->email,
        'phone' => $request->phone
      ]);
      if( $request->hasFile('thumbnail')){
        $file = $request->file('thumbnail'); 
        $properti = $file->getClientOriginalName();
        $path = $file->move('img/propiedades/', $properti );
        $request['path1'] = asset(str_replace('\\', '/', $path)); 
      }
      if( $request->hasFile('main_img')){
        $file = $request->file('main_img');
        $properti = $file->getClientOriginalName();
        $path = $file->move('img/poster/', $properti );
        $request['path2'] = asset(str_replace('\\', '/', $path));
      }
      $property->images()->create([
        'thumbnail' => $request->path1,
        'main_img'  => $request->path2
      ]);
      DB::commit();
      Session::flash('create','¡'.$request->properti.' Almacenado!');       
      return redirect()->route('list_show');  
    } catch (Exception $e) {
      DB::rollBack();
      return [
        'message' => 'PropertyController.store.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function details($id){
    try {
      $property = Property::findOrFail($id);
      $data = Property::whereId($property->id)
              ->select(['id','properti','residency','adress','status','city'])
              ->with(['characteristics:id,property_id,features,amenities,specialf,information,rooms,bathrooms,size,details','coordinates:id,property_id,latitude,length','contacts:id,property_id,email,phone','payments:id,property_id,coin,price','images:id,property_id,main_img'])
              ->has('contacts')
              ->has('payments')
              ->has('images')
              ->first();
      return view('details.details', compact('data'));           
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.details.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function editar($id){
    try {
      $property = Property::findOrFail($id);
      $data = Property::whereId($property->id)
              ->select(['id','properti','residency','adress','status','city','url'])
              ->with(['characteristics:id,property_id,features,amenities,specialf,information,rooms,bathrooms,size,details','coordinates:id,property_id,latitude,length','contacts:id,property_id,email,phone','payments:id,property_id,coin,price','images:id,property_id,thumbnail,main_img'])
              ->has('contacts')
              ->has('payments')
              ->has('images')
              ->first();
      return view('details.edit',  compact('data') );     
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.editar.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function update(UpdateProyect $request, $id){
    try {
      DB::beginTransaction();
      $request->validated();
      $property = Property::findOrFail($id);
      $property->update([
        'properti'  => $request->properti,
        'city'      => $request->city,
        'residency' => $request->residency,
        'adress'    => $request->adress,
        'url'       => $request->url,
        'status'    => $request->status
      ]);
      $property->payments()->update([
        'price' => $request->price,
        'coin'  => $request->coin
      ]);
      $property->characteristics()->update([
        'features'    => $request->features,
        'amenities'   => $request->amenities,
        'specialf'    => $request->specialf,
        'information' => $request->information,
        'rooms'       => $request->rooms,
        'bathrooms'   => $request->bathrooms,
        'size'        => $request->size,
        'details'     => $request->details
      ]);
      $property->coordinates()->update([
        'latitude' => $request->latitude,
        'length'   => $request->length
      ]);
      $property->contacts()->update([
        'email' => $request->email,
        'phone' => $request->phone
      ]);
      if( $request->hasFile('thumbnail')){
        $file = $request->file('thumbnail');
        $properti = $file->getClientOriginalName();
        $path = $file->move('img/propiedades/', $properti );
        $request['path1'] = asset(str_replace('\\', '/', $path)); 
      }
      else{
        $request['path1'] = $property->images[0]['thumbnail'];
      }
      if( $request->hasFile('main_img')){
        $file = $request->file('main_img');
        $properti = $file->getClientOriginalName();
        $path = $file->move('img/poster/', $properti );
        $request['path2'] = asset(str_replace('\\', '/', $path));
      }
      else{
        $request['path2'] = $property->images[0]['main_img'];
      }
      $property->images()->update([
        'thumbnail' => $request->path1,
        'main_img'  => $request->path2
      ]);
      DB::commit();
      Session::flash('update','¡'.$property->properti.' Actualizado!');
      return redirect()->route('details', $id );  
    } catch (Exception $e) {
      DB::rollBack();
      return [
        'message' => 'PropertyController.update.failed',
        'error: ' => $e->getMessage()
      ];
    }
  }

  public function delete($id){
    try {
      $property = Property::findOrFail($id);
  	  $property->delete();
    	Session::flash('delete','¡'.$property->properti.' Eliminado!');
    	return redirect()->route('list_show');
    } catch (Exception $e) {
      return [
        'message' => 'PropertyController.delete.failed',
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

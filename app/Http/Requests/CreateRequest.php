<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest{

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    $rules = [
        'properti'    => 'required|max:255',
        'residency'   => '',
        'coin'        => '',
        'adress'      => '',
        'features'    => '',
        'amenities'   => '',
        'specialf'    => '',
        'information' => '',
        'rooms'       => '',
        'bathrooms'   => '',
        'status'      => '',
        'size'        => '',
        'details'     => '',
        'latitude'    => '',
        'length'      => '',
        'city'        => 'required|max:70',
        'price'       => 'required|max:20',
        'thumbnail'   => 'required|image|mimes:jpg,jpeg,png',
        'main_img'    => 'required|image|mimes:jpg,jpeg,png',
        'url'         => 'required|max:255',
        'email'       => "required|string|email|max:255|unique:contacts,email,{$this->id}",
        'phone'       => 'required'
    ];   
    return $rules;
  }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProyect extends FormRequest
{
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
            'url'         => 'required|max:255',
            'email'       => "required|string|email|max:255|unique:contacts,email,{$this->id}",
            'phone'       => 'required'
        ];     
        if($this->get('main_img')){       
            $rules = array_merge($rules, ['main_img'  => 'mimes:jpg,jpeg,png']); 
        }
        if($this->get('thumbnail')){       
            $rules = array_merge($rules, ['thumbnail' => 'mimes:jpg,jpeg,png']); 
        }
        return $rules;
    }
}


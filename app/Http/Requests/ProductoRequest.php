<?php

namespace mainglobal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:40',
            'descripcion'=>'required|max:1024',
            'imagen1'=>'mimes:jpeg,bmp,png',
            'imagen2'=>'mimes:jpeg,bmp,png',
            'imagen3'=>'mimes:jpeg,bmp,png',
            'imagen4'=>'mimes:jpeg,bmp,png',
            'ficha_tecnica'=>'mimes:pdf',
            'brochure'=>'mimes:pdf',
            'idcategoria'=>'required'
        ];
    }
}

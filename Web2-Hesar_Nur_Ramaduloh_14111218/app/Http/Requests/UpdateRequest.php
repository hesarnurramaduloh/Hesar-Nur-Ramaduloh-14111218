<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nis' => 'Required',
            'nama' => 'Required',
            'alamat' => 'Required'
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'Nis Tidak Boleh Kosong.',
            'nama.required' => 'Nama Tidak Boleh Kosong.',
            'alamat.required' => 'Alamat Tidak Boleh Kosong.'
        ];
    }
    
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class VideogameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'genere'=>'required',
            'produttore'=>'required',
            'messaggio'=>'required'
        ];
    }

    public function messages(){

        return [
            'name.required'=> 'Il nome è obbligatorio',
            'genere.required'=> 'Il genere è obbligatorio',
            'produttore.required'=> 'Il produttore è obbligatorio',
            'messaggio.required'=> 'Il messaggio è obbligatorio'
        ];
    }
}

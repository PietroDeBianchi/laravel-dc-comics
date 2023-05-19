<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:225',
            'description' => 'nullable|max:650',
            'thumb' => 'required|url|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:50',
            'type' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo richiesto.',
            'title.max' => 'Il titolo deve essere di massimo 255 caratteri',

            'description.max' => 'La descrizione deve avere una lunghezza massima di 650 caratteri',

            'thumb.required' => 'URL immagine richiesto.',
            'thumb.url' => 'L\'URL inserito non è valido',
            'thumb.max' => 'l\'URL puo avere massimo 255 caratteri',

            'price.required' => 'Il prezzo è un campo richiesto.',
            'price.numeric' => 'Il prezzo inserito deve essere un numero.',

            'series.required' => 'Il nome della serie è un campo richiesto.',
            'series.max' => 'La serie inserita deve avere una lunghezza massima di 100 caratteri.',

            'sale_date.max' => 'La data inserita puó avere massimo 50 caratteri.',

            'type.max' => 'Il tipo inserito puo avere massimo 50 caratteri.',
        ];
    }
}

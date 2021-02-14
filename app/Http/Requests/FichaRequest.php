<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaRequest extends FormRequest
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
            'per_id' => 'sometimes|required',
            'fic_marca' => 'required',
            'fic_placa' => 'required',
            'fic_modelo' => 'required',
            'fic_km' => 'required',
            'fic_anio' => 'required',
            'fic_trabajosarealizar' => 'required',
            'fic_nivelcombustible' => 'required',
            'fic_firma' => 'sometimes|required'
        ];
    }

    public function messages()
    {
        return [
            'per_id.required' => 'EL CAMPO PROPIETARIO ES OBLIGATORIO',
            'fic_marca.required' => 'EL CAMPO MARCA ES OBLIGATORIO',
            'fic_placa.required' => 'EL CAMPO PLACA ES OBLIGATORIO',
            'fic_modelo.required' => 'EL CAMPO MODELO ES OBLIGATORIO',
            'fic_km.required' => 'EL CAMPO KM ES OBLIGATORIO',
            'fic_anio.required' => 'EL CAMPO AÑO ES OBLIGATORIO',
            'fic_trabajosarealizar.required' => 'EL CAMPO TRABAJOS A REALIZAR ES OBLIGATORIO',
            'fic_nivelcombustible.required' => 'DEBE SELECCIONAR UN NIVEL DE COMBUSTIBLE',
            'fic_firma.required' => 'DEBES FIRMAR LA FICHA'
        ];
    }
}

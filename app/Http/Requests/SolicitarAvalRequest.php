<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitarAvalRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'idTipoEvento'          => ['required'],
            'tituloEvento'          => ['required','string'],
            'sede'                  => ['required','string'],
            'fechaInicio'           => 'required|date_format:"d/m/Y"',
            'fechaFin'              => 'required|date_format:"d/m/Y"',
            'horasEfectivas'        => ['required'],
            'cartaSolicitudFile'    => ['required'],
            'programaAcademicoFile' => ['required'],
            'listaProfesoresFile'   => ['required'],
            'g-recaptcha-response'  => ['required','captcha']
        ];

    }

    public function messages()
    {
        return [
            'idTipoEvento.required'             => 'El campo es obligatorio.',
            'tituloEvento.required'             => 'El campo es obligatorio.',
            'tituloEvento.string'               => 'El campo es de tipo texto.',
            'sede.string'                       => 'El campo es de tipo texto.',
            'fechaInicio.required'              => 'El campo es obligatorio.',
            'fechaFin.required'                 => 'El campo es obligatorio.',
            'horasEfectivas.required'           => 'El campo es obligatorio.',

            'cartaSolicitudFile.required'       => 'El campo es obligatorio.',
            'programaAcademicoFile.required'    => 'El campo es obligatorio.',
            'listaProfesoresFile.required'      => 'El campo es obligatorio.',

            'g-recaptcha-response.required' => 'El Recaptcha es obligatorio.',
            'g-recaptcha-response.captcha'  => 'Completa el Recaptcha.',

        ];
    }
}

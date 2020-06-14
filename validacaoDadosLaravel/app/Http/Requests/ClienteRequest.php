<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

    public function messages() {
        return [
            'nome.required' => 'Digite um Nome!',
            'nome.min' => 'Digite no mínimo 5 caracteres!',
            'email.required' => 'Digite um E-mail!',
            'email.max' => 'Máximo de 200 caracteres!',
            'email.email' => 'Prencha um e-mail válido!', 
            'email.unique' => 'Esse e-mail já existe!',
            'imagem.required' => 'Prencha com uma imagem!',
            'imagem.mimes' => 'Apenas imagens PNG',
            'numero.num_par' => 'Apenas número par'
        ];
    }

    /* 
       e-mails cadastrados no sqlite:   
       manu@teste.com.br - 123ab123
       jessica@teste.com.br - 12345cdf
    */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:100',
            'email' => 'sometimes|required|max:200|email|unique:users',
            'imagem' => 'required|mimes:png',
            'numero' => 'num_par'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientesRequest extends FormRequest
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
            'nm' => 'required',
            'email' => 'required',
            'nm_pai' => 'required',
            'nm_mae' => 'required',
            'dt_nascimento' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'rm' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nm.required' => 'O campo  de Nome  é obrigatório !',
            'email.required' => 'O campo de Email  é obrigatório !',
            'unidade_m.required' => 'O campo da Unidade de Medida  é obrigatório !',
            'nm_pai.required' => 'O campo do Nome da Pai  é obrigatório !',
            'nm_mae.required' => 'O campo do Nome da Mãe  é obrigatório !',
            'dt_nascimento.required' => 'O campo da Data de Nascimento  é obrigatório !',
            'telefone.required' => 'O campo de Telefone  é obrigatório !',
            'cpf.required' => 'O campo de CPF  é obrigatório !',
            'rg.required' => 'O campo de RG é obrigatório !',
            'cep.required' => 'O campo de CEP é obrigatório !',
            'rua.required' => 'O campo de Rua é obrigatório !',
            'bairro.required' => 'O campo de Bairro é obrigatório !',
            'cidade.required' => 'O campo de Cidade é obrigatório !',
            'uf.required' => 'O campo da Unidade Federativa-(UF) é obrigatório !',
            'rm.required' => 'O campo de Renda Mensal é obrigatório !',
        ];
    }
}

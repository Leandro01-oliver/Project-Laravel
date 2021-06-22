<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutosRequest extends FormRequest
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
            'marca' => 'required',
            'valor_u' => 'required',
            'unidade_m' => 'required',
            'desc_produto' => 'required',
            'det_produto' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'marca.required' => 'O campo da Marca do Produto é obrigatório !',
            'valor_u.required' => 'O campo de Valor Unitário do Produto é obrigatório !',
            'unidade_m.required' => 'O campo da Unidade de Medida do Produto é obrigatório !',
            'desc_produto.required' => 'O campo de Descrição do Produto é obrigatório !',
            'det_produto.required' => 'O campo de Detalhe do Produto é obrigatório !',
        ];
    }
}
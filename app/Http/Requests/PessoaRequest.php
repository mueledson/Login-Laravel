<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'capital' => 'required',
            'capital_atual' => 'required',
            'cidade' => 'required',
            'estado' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O Campo Nome é Obrigatório!',
            'telefone.required' => 'O Campo Telefone é Obrigatório!',
            'cidade.required' => 'O Campo Cidade é Obrigatório!',
            'estado.required' => 'O Campo Estado é Obrigatório!',
            'capital.required' => 'O Campo de Capital Inicial é Obrigatório!',
            'capital_atual.required' => 'O Campo de Capital Atual é Obrigatório!',
            'cpf.required' => 'O Campo de Cpf é Obrigatório!'
        ];
    }
}
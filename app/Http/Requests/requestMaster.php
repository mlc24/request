<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestMaster extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:63',
            'cpf' => 'required|max:11|min:11',
            'senha' => 'required|string|min:8|confirmed',
            'idade' => 'required|integer|min:18|max:99',
            'altura' => 'nullable|numeric|min:1|max:3',
            'data_nascimento' => 'required|date',
            'descricao' => 'nullable|string|max:511'
        ];
    }

    
    public function warning(): array
    {
        return[
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser um texto.',
            'nome.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Esse email já está cadastrado.',
            'email.max' => 'O email não pode ter mais de 63 caracteres.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.string' => 'A senha deve ser uma sequência de caracteres.',
            'senha.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'senha.confirmed' => 'A confirmação da senha não coincide.',
            'idade.required' => 'O campo idade é obrigatório.',
            'idade.integer' => 'A idade deve ser um número inteiro.',
            'idade.min' => 'A idade mínima é 18 anos.',
            'idade.max' => 'A idade máxima é 99 anos.',
            'altura.numeric' => 'A altura deve ser um número.',
            'altura.min' => 'A altura mínima é 1 metro.',
            'altura.max' => 'A altura máxima é 3 metros.',
            'data_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',
            'descricao.string' => 'A descrição deve ser um texto.',
            'descricao.max' => 'A descrição não pode ter mais de 511 caracteres.',
            'cpf.min' => 'O CPF deve ter 11 caracteres.',
            'cpf.max' => 'O CPF deve ter 11 caracteres.',
            ];
        }
}

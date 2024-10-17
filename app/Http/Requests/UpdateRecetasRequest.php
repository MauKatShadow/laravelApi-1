<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecetasRequest extends FormRequest
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
            'categoria_id' => 'required|integer',
            'user_id' => 'required|integer',
<<<<<<< HEAD
            'titulo' => 'required|String',
            'descripcion' => 'required|String',
            'ingredientes' => 'required|String',
            'instrucciones' => 'required|String',
=======
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'ingredientes' => 'required|string',
            'instrucciones' => 'required|string',
>>>>>>> af90c534c64298ce6eea814c4b5aea13e07f82d3
        ];
    }
}

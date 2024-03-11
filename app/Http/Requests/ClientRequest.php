<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string', 'max:45'],
            'prenom' => ['required', 'string', 'max:45'],
            'adresse_num' => ['required', 'string', 'max:45'],
            'adresse_voie' => ['required', 'string', 'max:45'],
            'adresse_code_postal' => ['required', 'string', 'max:45'],
            'adresse_complement' => ['nullable', 'string', 'max:45'],
            'adresse_ville' => ['required', 'string', 'max:45'],
            'adresse_pays' => ['required', 'string', 'max:45'],
            'telephone' => ['required', 'string', 'max:45'],
            'email' => ['required', 'email', 'max:45'],
            'raison_social' => ['required', 'string', 'max:100'],
            'nif_stat' => ['required', 'string', 'max:60'],
            'bic' => ['required', 'string', 'max:45'],
            'id_type_entreprise' => ['required', 'integer'],
            'id_type_client' => ['required', 'integer'],
            'accepte_mail_marketing' => ['required', 'in:O,N'],
            'poste_contact' => ['required', 'string', 'max:45'],
            'commentaire' => ['required', 'string', 'max:500'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'id_type_client' => (int)$this->id_type_client,
            'id_type_entreprise' => (int)$this->id_type_entreprise,
        ]);
    }

    public function messages(): array 
    {
        return [
            'required' => 'Ce champ est obligatoire'
        ];
    }
}

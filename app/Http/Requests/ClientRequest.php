<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'telephone' => [
                'required',
                'string',
                'min:10',
                'max:13',
                function ($attribute, $value, $fail) {
                    // Valider que le numéro est au format local ou international
                    if (!preg_match('/^\+?\d+$/', $value)) {
                        $fail('Le numéro de téléphone doit être au format local ou international.');
                    }
                },
                Rule::unique('sfepi_client')->ignore(auth()->id())
            ],
            'email' => [
                'required',
                'email',
                'max:45', 
                Rule::unique('sfepi_client')->ignore(auth()->id())
            ],
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
            'nom' => ucwords(strtolower($this->nom)),
            'prenom' => ucwords(strtolower($this->prenom)),
        ]);
    }

    public function messages(): array 
    {
        return [
            'required' => 'Ce champ est obligatoire'
        ];
    }
}

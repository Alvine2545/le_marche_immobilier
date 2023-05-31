<?php

namespace App\Actions\Fortify;

use App\Models\Administrateur;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create($input)
    {
//         Validator::make($input, [
//             'name' => ['required', 'string', 'max:255'],
//             'email' => [
//                 'required',
//                 'string',
//                 'email',
//                 'max:255',
//                 Rule::unique(User::class),
//             ],
//             'password' => $this->passwordRules(),
//         ])->validate();
// dd('jhgf');
        if($input['type_user'] == 'agent_immo'){

            return User::create([
            'name' => $input['name'],
            'prenoms' => $input['prenom'],
            'email' => $input['email'],
            'titre' => 'Agent Immobilier',
            'password' => Hash::make($input['password']),
        ]);

        }else if($input['type_user'] == 'agence_immo'){

            return User::create([
            'name' => $input['name'],
            'prenoms' => $input['prenom'],
            'email' => $input['email'],
            'titre' => 'Agence Immobilére',
            'password' => Hash::make($input['password']),
        ]);

        }else if($input['type_user'] == 'partenaire'){
            
            return User::create([
            'name' => $input['name']+" "+$input['prenoms'],
            'prenoms' => $input['prenom'],
            'email' => $input['email'],
            'titre' => 'Partenaire',
            'password' => Hash::make($input['password']),
        ]);

        }else if($input['type_user'] == 'admin'){
            
            return Administrateur::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
        }

    }
}

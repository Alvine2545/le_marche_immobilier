<?php

namespace App\Http\Livewire\Admin\Immobilier;

use App\Models\BienImmobilier;
use App\Models\BienImmobilierUser;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AffectationComponent extends Component
{
    public $biens, $biens_all, $agent;
    public function render()
    {
        $this->biens_all = BienImmobilier::all();
        $this->biens = DB::table('bien_immobilier_users')
        ->join('users', 'bien_immobilier_users.user_id', '=', 'users.id')
        ->join('bien_immobiliers', 'bien_immobilier_users.bien_immobilier_id', '=', 'bien_immobiliers.id')
        ->select('users.*', 'bien_immobiliers.*')
        ->get();
        return view('livewire.admin.immobilier.affectation-component')->layout('layouts.index_admin');
    }

    public function affecter($id_int)
    {
        BienImmobilierUser::where('id', $id_int)->update(['agent_id' => $this->agent]);
    }
}

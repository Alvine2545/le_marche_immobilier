<?php

namespace App\Http\Controllers;

use App\Models\BienImmobilier;
use App\Models\TypeBien;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserOffresController extends Controller
{
    /*public $inputs = DB::table('caracteristique_type_biens')
        ->join('caracteristiques', 'caracteristique_type_biens.caracteristique_id','=', 'caracteristiques.id')
        ->join('type_biens', 'caracteristique_type_biens.type_bien_id', '=', 'type_biens.id')
        ->where('type_biens.id', $this->type_bien)
        ->select('caracteristiques.*')
        ->get();*/
    //
    public function indexAchat()
    {
        //$type_biens = TypeBien::all();
        $biens = BienImmobilier::where('status', true)->where('categorie_id', 1)->where('user_id', Auth::user()->id)->get();
        return view('users.achat', ['biens' => $biens]);
    }
    public function indexLocation()
    {
        $biens = BienImmobilier::where('status', true)->where('categorie_id', 2)->where('user_id', Auth::user()->id)->get();
        return view('users.location', ['biens' => $biens]);
    }
    public function createLocation()
    {
        /*$client = new Client();
        $response = $client->request('GET', 'http://api.geonames.org/searchJSON', [
            'query' => [
                'q' => '',
                'country' => 'BJ',
                'maxRows' => 1000,
                'username' => 'arianekans',
            ],
        ]);
        $geonamesData = json_decode($response->getBody(), true);
        $cities = collect($geonamesData['geonames'])->pluck('name')->sort()->toArray();*/
        $cities = ['Abomey', 'COTONOU', 'Alibori'];
        //$type_biens = TypeBien::all();
        return view('users.createL', ['cities' => $cities, 'type_biens' => TypeBien::all()]);
    }
    public function createAchat()
    {
       /* $client = new Client();
        $response = $client->request('GET', 'http://api.geonames.org/searchJSON', [
            'query' => [
                'q' => '',
                'country' => 'BJ',
                'maxRows' => 1000,
                'username' => 'arianekans',
            ],
        ]);
        $geonamesData = json_decode($response->getBody(), true);
        $cities = collect($geonamesData['geonames'])->pluck('name')->sort()->toArray();*/
        
        $inputs = DB::table('caracteristique_type_biens')
        ->join('caracteristiques', 'caracteristique_type_biens.caracteristique_id','=', 'caracteristiques.id')
        ->join('type_biens', 'caracteristique_type_biens.type_bien_id', '=', 'type_biens.id')
        ->where('type_biens.id', $this->type_bien)
        ->select('caracteristiques.*')
        ->get();
        
        $cities = ['Abomey', 'COTONOU', 'Alibori'];
        //$type_biens = TypeBien::all();
        return view('users.create', ['inputs' => $inputs, 'cities' => $cities, 'type_biens' => TypeBien::all()]);
    }
    public function addOffre(Request $request)
    {
        $data = new BienImmobilier();
        if ($request->file('photo')) {
            foreach ($request->file('photo') as $image) {
                $path = $image->store('biens_en_vente', 'public');
                $data->photo = $path;
                if ($request->main_image == $image->getClientoriginalName()) {
                    $data->imagemain = $path;
                }
            }
        }
        
        $data->reference = "$request->reference";
        $data->ville = $request->ville;
        $data->prix_min = $request->prix_min;
        $data->prix_max = $request->prix_max;
        
        $data->user_id = Auth::user()->id;
        $data->type_id = $request->type_bien; 
        if ($request->type == "achat") {
           $data->categorie_id = 1;
        } else {
            $data->categorie_id = 2;
        }
        
        
        $data->save();

        return redirect()->back();
    }
    public function update($id)
    {
       
    }

}

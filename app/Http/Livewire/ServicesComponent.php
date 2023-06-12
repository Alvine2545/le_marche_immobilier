<?php

namespace App\Http\Livewire;

use App\Models\BienImmobilier;
use App\Models\TypeBien;
use App\Models\User;
use Livewire\Component;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class ServicesComponent extends Component
{
    use WithFileUploads;
    //recherche variables
    public $mesbudgets, $meslocalisations, $mestypes;
    public $currentSteep, $totalSteep = 3;
   public $typeService, $cities;
   public $biens, $recherche;
   public $type_user, $type_biens, $budgetA, $budgetL, $inputs = [], $colonne_names = [], $inputdata = [], $images = [] ;
   public $type_bien, $description, $name, $surname, $telephone, $email, $reference, $prix_min, $prix_max, $surface, $ville, $photos = [], $mainImageId, $photo;

   public function resetInput()
   {
        $this->type_bien ='';
        $this->description ='';
        $this->name ='';
        $this->prenom ='';
        $this->password ='';
        $this->telephone ='';
        $this->ville ='';
        $this->confirmed_password ='';
        $this->reference ='';
        $this->prix_max ='';
        $this->prix_min ='';
        $this->surface ='';
        $this->nbr_chambre ='';
        $this->nbr_piece ='';
        $this->photo ='';
        $this->type_user ='';
   }
   public function store_bien_location()
   {   
    
       $user = User::create([
            'name' => $this->name,
            'prenoms' => $this->surname,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'titre' => 'particulier',
            // 'password' => Hash::make($this->password),
        ]);

        $path = $this->photo->store('biens_en_location', 'public');
        $data = new BienImmobilier();
        $data->reference = $this->reference;
        $data->photo = $path;
        $data->ville = $this->ville;
        $data->prix_min = $this->prix_min;
        $data->prix_max = $this->prix_max;
        $data->user_id = $user->id;
        $data->status = false;
        $data->imagemain = $path;
        for ($i=0; $i < count($this->inputdata); $i++) { 
            $a = $this->inputs[$i]['nom'];
            $data->$a = $this->inputdata[$i];
        }

        if ($this->typeService == 1) {
            //en location
            $data->categorie_id = 2;
        } elseif ($this->typeService == 2) {
            //en vente
            $data->categorie_id = 1;
        } 
        
        $data->type_id = $this->type_bien; 

        $data->save();
        session()->flash('message','Votre offre a été bien enregistrés. Vous reçevrez un mail de confirmation de votre offre.');
        $this->resetInput();
   }
   public function selectInputs()
   {
        
   }
    public function mount($type)
    {
        # code...
        $this->currentSteep = 1;
        $this->typeService = $type;
        $this->budgetA = [
            '0 – 500 000', 
            '500 001 – 750 000',
            '750 001 – 1 000 000',
            '1 000 001 – 1 500 000',
            '1 500 001 – 2 000 000',
            '2 000 001 – 3 000 000',
            '3 000 001 – 4 000 000',
           ' 4 000 001 – 5 000 000',
            '5 000 001 – 7 500 000',
            '7 500 001 – 10 000 000',
            '10 000 001 – 15 000 000',
            '15 000 001 – 20 000 000',
            '20 000 001 – 25 000 000',
           ' 25 000 001 – 30 000 000',
            '30 000 001 – 40 000 000',
            '40 000 001 – 50 000 000',
            '50 000 001 – 75 000 000',
            '75 000 001 – 100 000 000',
            '100 000 001 – 150 000 000',
            '150 000 001 – 200 000 000',
            '200 000 001 – 300 000 000',
            '300 000 001 – 400 000 000',
            '400 000 001 – 500 000 000',
            'Plus de 500 000 000',
        ];

        $this->budgetL = [
            '0 – 25 000', 
            '25 001 – 50 000',
            '50 001 – 75 000',
            '75 001 - 100 000',
            '100 001 – 150 000',
           ' 150 001 – 200 000',
            '200 001 – 250 000',
            '250 001 – 300 000',
            '300 001 – 400 000',
            '400 001 – 500 000',
            '500 001 – 750 000',
            '750 001 – 1 000 000',
            '1 000 001 – 1 500 000',
            '1 500 001 – 2 000 000',
           ' Plus de 2 000 000',
        ];
    }
    public function render()
    {
        $this->type_biens = TypeBien::all();
        //inputs des caractéristiques
        $this->inputs = DB::table('caracteristique_type_biens')
        ->join('caracteristiques', 'caracteristique_type_biens.caracteristique_id','=', 'caracteristiques.id')
        ->join('type_biens', 'caracteristique_type_biens.type_bien_id', '=', 'type_biens.id')
        ->where('type_biens.id', $this->type_bien)
        ->select('caracteristiques.*')
        ->get(); 
        //Les biens
        $this->biens = BienImmobilier::all()->where('status', true);
        $this->cities = ['Abomey', 'COTONOU', 'Alibori'];
       /* $client = new Client(); 
        $response = $client->request('GET', 'http://api.geonames.org/searchJSON', [
            'query' => [
                'q' => '',
                'country' => 'BJ',
                'maxRows' => 77,
                'username' => 'arianekans',
            ],
        ]);
        $geonamesData = json_decode($response->getBody(), true);
        $this->cities = collect($geonamesData['geonames'])->pluck('name')->sort()->toArray();*/
        //$this->biens = BienImmobilier::where('status', true)->where('categorie_id', 1)->get();    

        switch ($this->typeService) {
            case 0:
                return view('livewire.services-component')->layout('layouts.index');
                //break;
            case 1:
                
                return view('livewire.services-component')->layout('layouts.index');
                //break;
            case 2:
                
                return view('livewire.services-component')->layout('layouts.index');
                //break;
            case 3:
                $this->biens = BienImmobilier::where('status', true)->where('categorie_id', 2)->get();
                return view('livewire.services-component')->layout('layouts.index');
                //break;
            default:
                # code...
                break;
        }
        
    }
//     public function updatedPhotos()
// {
//     //$this->photos = [];
//     foreach ($this->photos as $photo) {
//         if ($photo) {
//             $this->photos[] = $photo->temporaryUrl();
//         }
//     }
// }
    public function show()
    {
            dd($this->images);
        //$this->photo = $this->photo->first();
    }
public function aaa()
{
    # code...
    dd('dfg');
}

    public function increaseSteep(){
        dd('fgvc');
        //$this->resetErrorBag();
        //$this->validateData();
        $this->currentSteep++;

        
        
        //$this->choix = $this->roles[0];
        if($this->currentSteep > $this->totalSteep){
            $this->currentSteep = $this->totalSteep;
        }
    }
    public function decreaseSteep(){
     //   $this->resetErrorBag();
        //$this->validateData();
        $this->currentSteep--;
        if($this->currentSteep<1){
            $this->currentSteep = 1;
        }
    }


    public function updateData($categori_id)
    {
        if ($this->mestypes != null) {

            $this->recherche = BienImmobilier::all()->where('categorie_id', $categori_id)->where('type_id', $this->mestypes)->where('status', true);
            //$this->mount(0);
        } elseif ($this->meslocalisations != null) {
            
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('ville', $this->meslocalisations);
       
        } elseif ($this->mesbudgets != null) {
            
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('prix_max', explode(' – ',$this->mesbudgets)[1])->where('status', true);
        
        }elseif ($this->mestypes != null && $this->meslocalisations != null){
            
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('type_id', $this->mestypes)->where('ville', $this->meslocalisations)->where('status', true);
        
        }elseif ($this->mestypes != null && $this->mesbudgets != null){
           
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('type_id', $this->mestypes)->where('prix_max', explode(' – ',$this->mesbudgets)[1])->where('status', true);
        
        }elseif ($this->mesbudgets != null && $this->meslocalisations != null){
           
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('prix_max', explode(' – ',$this->mesbudgets)[1])->where('ville', $this->meslocalisations)->where('status', true);
        
        }elseif ($this->mestypes != null && $this->meslocalisations != null && $this->mesbudgets){
            
            $this->biens = BienImmobilier::all()->where('categorie_id', $categori_id)->where('type_id', $this->mestypes)->where('prix_max', explode(' – ',$this->mesbudgets)[1])->where('ville', $this->meslocalisations)->where('status', true);
        }
           
    }

}

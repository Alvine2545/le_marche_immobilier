<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\UserOffresController;
use App\Http\Livewire\AddAttributBienComponent;
use App\Http\Livewire\Admin\ActualitesComponent;
use App\Http\Livewire\Admin\AdminHomeComponent;
use App\Http\Livewire\Admin\AdministrateurComponent;
use App\Http\Livewire\Admin\Immobilier\AffectationComponent;
use App\Http\Livewire\Admin\Immobilier\AgentImmobiliersComponent;
use App\Http\Livewire\Admin\Immobilier\BienImmobilierComponent;
use App\Http\Livewire\Admin\MessageComponent;
use App\Http\Livewire\Admin\Partenaires\PartenairesComponent;
use App\Http\Livewire\Admin\Profil\AdminProfilComponent;
use App\Http\Livewire\Admin\TypeBienComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\OffrePremiumComponent;
use App\Http\Livewire\OffresComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\ShowOffreComponent;
use App\Http\Livewire\Users\AchatComponent;
use App\Http\Livewire\VisitorComponent;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', VisitorComponent::class)->name('/');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('services/{type}', ServicesComponent::class)->name('services');
Route::get('/offres', OffresComponent::class)->name('offre');
Route::get('/offrespremium', OffrePremiumComponent::class)->name('offre-premium');
Route::get('/offres/{type}', ShowOffreComponent::class);

//Route::post('/register', [CreateNewUser::class, 'create'])->name('register');

//Utilisateur inscrit
Route::middleware('auth:web')->group(function(){
    Route::view('home', 'users.dashboard')->name('home');

    Route::get('achat', [UserOffresController::class, 'indexAchat'])->name('achat');
    Route::get('createA', [UserOffresController::class, 'createAchat'])->name('create-vente');
    Route::post('storeOffre', [UserOffresController::class, 'addOffre'])->name('store-offre');

    Route::get('location', [UserOffresController::class, 'indexLocation'])->name('location');
    Route::get('createL', [UserOffresController::class, 'createLocation'])->name('create-location');

    Route::prefix('users')->name('users.')->group(function(){

        
        
        /*Route::get('achat', AchatComponent::class)
        ->name('achat');  */
    });
});



//Route::view('home', 'users.dashboard');
//Route::view('achat', 'users.achat');
//Route::view('location', 'users.location');
Route::view('profil-setting', 'profil.show');
Route::view('notification', 'profil.show');

//
// Route::get('loginadmin', function(){ return redirect()->route('admin.login'); })
// ->name('loginadmin');
Route::middleware('auth')->group(function () {
    //Route::view('home', 'users.dashboard');
});

//Routes admin

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login',function(){ return view('auth.loginAdmin'); })
    ->middleware(['guest:admin'])
    ->name('login');

    $limiter = config('fortify.limiters.login');
    $twoFactorLimiter = config('fortify.limiters.two-factor');
    $verificationLimiter = config('fortify.limiters.verification', '6,1');
    
    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]));


    Route::get('register',function(){ return view('auth.registerAdmin'); })
    ->middleware(['guest:admin'])
    ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware(['guest:admin']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');

//Les vues des pages
    Route::get('/home', AdminHomeComponent::class )
    ->middleware('auth:admin')
    ->name('home');

    Route::get('/actualites', ActualitesComponent::class )
    ->middleware('auth:admin')
    ->name('actualites');

    Route::get('/partenaires', PartenairesComponent::class )
    ->middleware('auth:admin')
    ->name('partenaires');

    Route::get('/immobiliers', AgentImmobiliersComponent::class )
    ->middleware('auth:admin')
    ->name('immobiliers');

    Route::get('/bienimmobiliers', BienImmobilierComponent::class )
    ->middleware('auth:admin')
    ->name('bien-immobiliers');

    Route::get('/affectation', AffectationComponent::class )
    ->middleware('auth:admin')
    ->name('affectation');

    Route::get('/addAttr', AddAttributBienComponent::class )
    ->middleware('auth:admin')
    ->name('add-attr');

    Route::get('/show', AdministrateurComponent::class )
    ->middleware('auth:admin')
    ->name('show');

    Route::get('/messages', MessageComponent::class )
    ->middleware('auth:admin')
    ->name('messages');

    Route::get('/typeBien', TypeBienComponent::class )
    ->middleware('auth:admin')
    ->name('type');

    Route::get('/setting', AdminProfilComponent::class )
    ->middleware('auth:admin')
    ->name('setting');
});

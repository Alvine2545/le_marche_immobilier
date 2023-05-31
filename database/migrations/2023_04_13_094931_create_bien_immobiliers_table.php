<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_immobiliers', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->nullable();
            $table->string('photo')->nullable(); 
            $table->string('imagemain')->nullable();
            $table->integer('nbre_piece')->nullable();
            $table->integer('chambre_a_coucher')->nullable();
            $table->integer('salle_bain')->nullable();
            $table->boolean('wc')->nullable();
            $table->boolean('status')->default(false);
            $table->string('surface_totale')->nullable();
            $table->string('surface_habitable')->nullable();
            $table->string('departement')->nullable();
            $table->string('ville')->nullable();
            $table->string('prix_min')->nullable();
            $table->string('prix_max')->nullable();
            $table->string('adresse')->nullable();
            $table->string('prix_nuit')->nullable();
            $table->boolean('document_complementaire')->nullable();

            $table->boolean('parking')->nullable();
            $table->boolean('piscine')->nullable();
            $table->boolean('jardin')->nullable();
            $table->boolean('climatiseur')->nullable();
            $table->boolean('gaz')->nullable();
            $table->boolean('chauffage')->nullable();
            $table->boolean('internet')->nullable();
            $table->boolean('survillance')->nullable();
            $table->boolean('plage')->nullable();
            $table->text('autres')->nullable();//Autres avantages à spécifier
            $table->boolean('premium')->default(false); //une offre premuim
//Foreign keys
            $table->foreignId('user_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('administrateur_id')->nullable()->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bien_immobiliers');
    }
};

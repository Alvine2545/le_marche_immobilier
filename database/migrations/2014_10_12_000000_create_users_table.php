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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenoms')->nullable();
            $table->string('nameAgence')->nullable();
            $table->string('email')->unique();
            $table->string('titre')->nullable();
            $table->string('telephone')->nullable();
            $table->string('residence')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('etatCompte')->default(false);
            $table->boolean('statut')->default(true);
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->bigInteger('administrateur_id')->nullable()->constrained();
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
        Schema::dropIfExists('users');
    }
};

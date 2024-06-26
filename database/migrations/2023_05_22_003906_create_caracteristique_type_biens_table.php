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
        Schema::create('caracteristique_type_biens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_bien_id')->constrained('type_biens')->nullable();
            $table->foreignId('caracteristique_id')->constrained('caracteristiques')->nullable();
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
        Schema::dropIfExists('caracteristique_type_biens');
    }
};

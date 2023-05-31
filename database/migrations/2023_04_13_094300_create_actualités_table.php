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
        Schema::create('actualités', function (Blueprint $table) {
            $table->id();
            $table->boolean('statut')->default(false);
            $table->string('photo')->nullable();
            $table->text('description');
            $table->text('reference');
            $table->foreignId('administrateur_id')->constrained();
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
        Schema::dropIfExists('actualités');
    }
};

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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tel');
            $table->string('ifu');
            $table->string('adresse');
            $table->string('site');
            $table->string('logo');
            $table->string('description')->nullable();
            $table->boolean('status')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('partenaires');
    }
};

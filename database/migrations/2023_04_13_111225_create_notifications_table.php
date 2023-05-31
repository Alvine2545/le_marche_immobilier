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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('idUser_to');
            $table->bigInteger('idUser_from')->nullable();
            $table->boolean('chef_from')->default(false);
            $table->bigInteger('idDirection')->nullable();
            $table->boolean('admin_src')->default(false);
            $table->boolean('visible')->default(false);
            $table->string('message');
            $table->date('dateNotif');

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
        Schema::dropIfExists('notifications');
    }
};

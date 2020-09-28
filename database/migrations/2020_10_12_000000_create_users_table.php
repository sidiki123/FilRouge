<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('id_visiteur')->nullable();
            // $table->unsignedInteger('id_agence')->nullable();
            // $table->unsignedInteger('id_admin')->nullable();
            // $table->foreign('id_visiteur')->references('id')->on('visiteurs')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_agence')->references('id')->on('agences')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('nom_agence')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
}

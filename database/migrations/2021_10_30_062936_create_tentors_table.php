<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentors', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('uniqueid');
			$table->string('username');
			$table->string('password');
			$table->string('level');
			$table->string('email');
			$table->string('address');
			$table->string('phone');
			$table->string('mapel');
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
        Schema::dropIfExists('tentors');
    }
}
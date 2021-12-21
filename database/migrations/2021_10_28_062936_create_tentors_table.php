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
			$table->string('uniqueid')->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('pict_name')->nullable();
			$table->string('level')->nullable();
			$table->string('email')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->string('mapel')->nullable();
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
        Schema::dropIfExists('tentors');
    }
}

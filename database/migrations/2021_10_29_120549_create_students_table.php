<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
			$table->string('username');
			$table->string('password');
			$table->string('email')->nullable();
			$table->string('name');
			$table->string('pict_name')->nullable();
			$table->string('parent_name')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->rememberToken();
			$table->string('package');
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
        Schema::dropIfExists('students');
    }
}

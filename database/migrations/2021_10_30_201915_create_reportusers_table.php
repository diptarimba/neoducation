<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportusers', function (Blueprint $table) {
            $table->id();
			$table->string('topic');
			$table->string('place');
			$table->string('mapel');
			$table->string('hash');
			$table->string('students');
			$table->unsignedbigInteger('tentors');
			$table->string('name_tentors');
			$table->integer('biaya');
			$table->string('status_bayar');
			$table->timestamp('date_exec')->nullable();
            $table->timestamps();
			
			//$table->foreign('tentors')->references('id')->on('tentors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportusers');
    }
}

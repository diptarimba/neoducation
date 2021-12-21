<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditForeignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reportusers', function (Blueprint $table) {
            $table->foreign('tentors')->references('id')->on('tentors');
        });
		
		Schema::table('reports', function (Blueprint $table) {
            $table->foreign('tentors')->references('id')->on('tentors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

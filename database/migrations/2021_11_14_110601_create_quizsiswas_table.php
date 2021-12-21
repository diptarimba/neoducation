<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizsiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizsiswas', function (Blueprint $table) {
			$table->id();
			$table->string('hash');
			$table->integer('siswa_id');
			$table->string('tentor_id');
			$table->string('ans1');
			$table->string('ans2');
			$table->string('ans3');
			$table->string('ans4');
			$table->string('ans5');
			$table->string('ans6');
			$table->string('ans7');
			$table->string('ans8');
			$table->string('ans9');
			$table->string('ans10');
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
        Schema::dropIfExists('quizsiswas');
    }
}

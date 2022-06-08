<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('classroom_id')->references('id')->on('classrooms');
            // $table->foreignId('form_id')->constrained('forms')->nullable();
            $table->double('nilai_angka')->nullable();
            $table->char('nilai_huruf')->nullable();
            $table->timestamps();
            $table->integer('tahun')->default('0')->nullable();
            $table->integer('periode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}

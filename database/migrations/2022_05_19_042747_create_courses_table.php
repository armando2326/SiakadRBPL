<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk')->unique();
            $table->string('nama_mata_kuliah');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('kode_kelas');
            $table->integer('sks')->nullable();
            $table->integer('semester')->nullable();
            // $table->integer('sks');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('tahunKurikulum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

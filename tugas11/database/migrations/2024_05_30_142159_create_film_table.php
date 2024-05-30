<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster', 45);
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('film');
    }
};

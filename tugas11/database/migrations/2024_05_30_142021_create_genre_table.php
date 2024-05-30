<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreTable extends Migration
{
    public function up()
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genre');
    }
};

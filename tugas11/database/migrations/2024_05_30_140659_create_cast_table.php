<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastTable extends Migration
{
    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->integer('umur');
            $table->text('bio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cast');
    }
};


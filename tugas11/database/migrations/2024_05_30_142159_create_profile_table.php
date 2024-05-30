<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->integer('umur');
            $table->text('bio');
            $table->text('alamat');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikefotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likefotos', function (Blueprint $table) {
            $table->bigIncrements('KomentarID');
            $table->unsignedBigInteger('FotoID');
            $table->foreign('FotoID')->references('FotoID')->on('fotos')->onDelete('cascade');
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->text('IsiKomentar');
            $table->date('TanggalKomentar');
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
        Schema::dropIfExists('likefotos');
    }
}

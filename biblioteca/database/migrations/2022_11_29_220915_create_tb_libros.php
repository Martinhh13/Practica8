<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->integer('ISBN');
            $table->string('Titulo');
            $table->string('Autor');
            $table->integer('Paginas');
            $table->string('Editorial');
            $table->string('Emailed');
            $table->unsignedBigInteger('autor_id');
            $table->timestamps();
            $table->foreign('autor_id')->references('idautor')->on('tb_autores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};

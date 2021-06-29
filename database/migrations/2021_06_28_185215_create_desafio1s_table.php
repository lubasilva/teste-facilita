<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesafio1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desafio1s', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->float('altura')->nullable(false);
            $table->float('crescimentoAno')->nullable(false);
            $table->float('ano')->nullable(false);
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
        Schema::dropIfExists('desafio1s');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Arquivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
        {
            Schema::create('arquivos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('nome');
                $table->string('local');
                $table ->string('arquivo');
            });
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

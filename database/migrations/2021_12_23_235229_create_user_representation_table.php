<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRepresentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_representation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('representation_id');
            $table->foreignId('user_id');
            $table->integer('places');

            $table->foreign('representation_id')->references('id')
                  ->on('representations')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_representation');
    }
}

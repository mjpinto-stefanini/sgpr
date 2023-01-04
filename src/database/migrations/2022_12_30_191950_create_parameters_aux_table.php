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
        Schema::create('parameters_aux', function (Blueprint $table) {
            $table->id();
            $table->integer('parameters_id')->unsigned();
            $table->foreign('parameters_id')->references('id')->on('parameters');
            $table->integer('units_id')->unsigned();
            $table->foreign('units_id')->references('id')->on('units');
            $table->integer('economic_ratings_id')->unsigned();
            $table->foreign('economic_ratings_id')->references('id')->on('economic_ratings');
            $table->integer('sources_id')->unsigned();
            $table->foreign('sources_id')->references('id')->on('sources');
            $table->integer('type_of_expenses_id')->unsigned();
            $table->foreign('type_of_expenses_id')->references('id')->on('type_of_expenses');
            $table->integer('upgs_id')->unsigned();
            $table->foreign('upgs_id')->references('id')->on('upgs');

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
        Schema::dropIfExists('parameters_aux');
    }
};

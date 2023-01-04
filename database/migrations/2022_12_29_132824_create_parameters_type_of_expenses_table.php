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
        Schema::create('parameters_type_of_expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('parameters_id')->unsigned();
            $table->foreign('parameters_id')->references('id')->on('parameters');
            $table->enum('economic_ratings_id', ['true', 'false'])->default('false');
            $table->enum('type_of_expenses_id',  ['true', 'false'])->default('false');
            $table->enum('sources_id', ['true', 'false'])->default('false');

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
        Schema::dropIfExists('parameters_type_of_expenses_economic_ratings_sources');
    }
};

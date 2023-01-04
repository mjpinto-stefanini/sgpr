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
        Schema::create('upg_parameters', function (Blueprint $table) {
            $table->id();
            $table->integer('parameters_id')->unsigned();
            $table->foreign('parameters_id')->references('id')->on('parameters');
            $table->enum('upg_id', ['true', 'false'])->default('false');
            $table->enum('status', ['true', 'false'])->default('true');
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
        Schema::dropIfExists('upg_parameters');
    }
};

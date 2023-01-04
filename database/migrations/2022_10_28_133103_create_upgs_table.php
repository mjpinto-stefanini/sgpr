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
        Schema::create('upgs', function (Blueprint $table) {
            $table->id();
            $table->integer('units_id')->unsigned();
            $table->foreign('units_id')->references('id')->on('units');
            $table->string('cost_center_cod');
            $table->longText('description');
            $table->string('upg');
            $table->longText('slug');
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
        Schema::dropIfExists('upgs');
    }
};

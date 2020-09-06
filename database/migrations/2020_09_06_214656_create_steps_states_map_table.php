<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsStatesMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps_states_map', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('step_id');
            $table->unsignedBigInteger('state_id');
            $table->char('type');
            $table->foreign('step_id')->references('id')->on('steps_maps');
            $table->foreign('state_id')->references('id')->on('states_maps');
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
        Schema::dropIfExists('steps_states_map');
    }
}

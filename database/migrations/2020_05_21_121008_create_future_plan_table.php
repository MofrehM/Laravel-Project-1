<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuturePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('future_plan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId')->nullable();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('name');
            $table->string('level');
            $table->string('DevObj');
            $table->string('AreaDev')->nullable();
            $table->string('purpose')->nullable();
            $table->string('priority')->nullable();
            $table->string('activity1')->nullable();
            $table->string('success1')->nullable();
            $table->string('activity2')->nullable();
            $table->string('success2')->nullable();
            $table->string('activity3')->nullable();
            $table->string('success3')->nullable();
            $table->string('activity4')->nullable();
            $table->string('success4')->nullable();
            $table->string('activity5')->nullable();
            $table->string('success5')->nullable();
            $table->date('date')->nullable();
            $table->date('DiscussedDate')->nullable();
            $table->Integer('DesiredScore')->nullable();
            $table->Integer('CurrentScore')->nullable();

        });

    
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('future_plan');
    }
}

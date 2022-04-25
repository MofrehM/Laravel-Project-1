<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId')->nullable();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Q1')->nullable();
            $table->integer('Q2')->nullable();
            $table->integer('Q3')->nullable();
            $table->integer('Q4')->nullable();
            $table->integer('Q5')->nullable();
            $table->integer('Q6')->nullable();
            $table->integer('Q7')->nullable();
            $table->integer('Q8')->nullable();
            $table->integer('Q9')->nullable();
            $table->integer('Q10')->nullable();
            $table->integer('Q11')->nullable();
            $table->integer('Q12')->nullable();
            $table->integer('Q13')->nullable();
            $table->integer('Q14')->nullable();
            $table->integer('Q15')->nullable();
            $table->integer('Q16')->nullable();
            $table->integer('Q17')->nullable();
            $table->integer('Q18')->nullable();
            $table->integer('Q19')->nullable();
            $table->integer('Q20')->nullable();
            $table->integer('Q21')->nullable();
            $table->integer('Q22')->nullable();
            $table->integer('Q23')->nullable();
            $table->integer('Q24')->nullable();
            $table->integer('Q25')->nullable();
            $table->integer('Q26')->nullable();
            $table->integer('Q27')->nullable();
            $table->integer('Q28')->nullable();
            $table->integer('Q29')->nullable();
            $table->integer('Q30')->nullable();
            $table->integer('Q31')->nullable();
            $table->integer('Q32')->nullable();
            $table->integer('Q33')->nullable();
            $table->integer('Q34')->nullable();
            $table->integer('Q35')->nullable();
            $table->integer('Q36')->nullable();
            $table->integer('Q37')->nullable();
            $table->integer('Q38')->nullable();
            $table->integer('Q39')->nullable();
            $table->integer('Q40')->nullable();
            $table->integer('Q41')->nullable();
            $table->integer('Q42')->nullable();
            $table->integer('Q43')->nullable();
            $table->integer('Q44')->nullable();
            $table->integer('Q45')->nullable();
            $table->integer('Q46')->nullable();
            $table->integer('Q47')->nullable();
            $table->integer('Q48')->nullable();
            $table->integer('Q49')->nullable();
            $table->integer('Q50')->nullable();         
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
        Schema::dropIfExists('questions');
    }
}

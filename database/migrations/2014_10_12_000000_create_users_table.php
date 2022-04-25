<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname')->nullable();
            $table->string('email')->unique();
            $table->string('lname')->nullable();
            $table->string('employer')->nullable();
            $table->string('age');
            $table->string('gender');
            $table->string('sector');
            $table->string('education');
            $table->string('job_level');
            $table->string('purposes');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verifyToken');
            $table->boolean('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

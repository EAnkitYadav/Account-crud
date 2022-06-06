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
        Schema::create('accounts', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('hobby');
            $table->string('gender');
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('accounts');
    }
};

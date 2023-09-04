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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 50)->unique();
            $table->string('password', 50);
            $table->text('avatar')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->float('longitude');
            $table->float('latitude');
            $table->string('city')->nullable();
            $table->string('self_description')->nullable();
            $table->string('phone')->nullable();

            //timestamp
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');

            //foreign key
            $table->integer('id_role');
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
};

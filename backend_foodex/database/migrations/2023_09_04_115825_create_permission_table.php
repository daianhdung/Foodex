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
        Schema::create('permission', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');

            //timestamp
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');

            //foreign key
            $table->integer('id_resource');
            $table->integer('id_action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
};

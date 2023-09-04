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
        Schema::create('role_map_permission', function (Blueprint $table) {
            $table->id();

            $table->date('start_date');
            $table->date('end_day');

            $table->string('description');

            //timestamp
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');

            //foreign key
            $table->integer('id_role');
            $table->integer('id_permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_map_permission');
    }
};

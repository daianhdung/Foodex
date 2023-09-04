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
        Schema::create('merchant', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_name', 100);
            $table->string('address', 255);
            $table->text('avatar');
            $table->time('time_open');
            $table->time('time_close');
            $table->string('phone', 11);
            $table->float('lowest_price')->nullable();
            $table->float('highest_price')->nullable();
            $table->tinyInteger('status');
            $table->float('longitude');
            $table->float('latitude');

            //timestamp
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');

            //foreign key
            $table->integer('id_city');
            $table->integer('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchant');
    }
};

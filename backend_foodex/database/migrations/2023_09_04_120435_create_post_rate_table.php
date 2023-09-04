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
        Schema::create('post_rate', function (Blueprint $table) {
            $table->id();

            $table->text('comment');
            $table->tinyInteger('status');

            $table->text('image');
            $table->string('type');

            //
            $table->tinyInteger('hygiene');
            $table->tinyInteger('space');
            $table->tinyInteger('service');
            $table->tinyInteger('taste');
            $table->tinyInteger('price');

            $table->integer('user_vote');

            //foreign key
            $table->integer('id_user');
            $table->integer('id_post');

            //timestamp
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_rate');
    }
};

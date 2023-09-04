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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->text('content');
            $table->text('image');
            $table->double('total_rate', 1, 1);
            $table->double('total_vote', 1, 1);

            //foreign key
            $table->integer('id_user');
            $table->integer('id_category');
            $table->integer('id_merchant');

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
        Schema::dropIfExists('post');
    }
};

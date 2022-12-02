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
        Schema::create('temp_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->bigInteger('phone_no');
            $table->string('address');
            $table->integer('is_over_words')->default(0);
            $table->integer('is_exclusive');
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
        Schema::dropIfExists('temp_posts');
    }
};

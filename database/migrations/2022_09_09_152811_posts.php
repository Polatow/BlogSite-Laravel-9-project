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
        Schema::create('Posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_slug');
            $table->text('post_description');
            $table->enum('post_status', ['active', 'passive', 'draft']);
            $table->string('post_image');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('Categories')->onDelete('cascade');
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
        Schema::dropIfExists('Posts');
    }
};

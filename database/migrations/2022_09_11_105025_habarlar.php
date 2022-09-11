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
        Schema::create('Habarlar', function (Blueprint $table) {
            $table->id();
      
            $table->string('habar_title');
            $table->string('habar_slug');
            $table->text('habar_description');
            $table->enum('habar_status', ['active', 'passive', 'draft']);
            $table->string('habar_image');
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
        Schema::dropIfExists('Habarlar');
    }
};

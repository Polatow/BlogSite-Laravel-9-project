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
        Schema::create('Makalalar', function (Blueprint $table) {
            $table->id();
            $table->string('makala_title');
            $table->string('makala_slug');
            $table->string('makala_image');
            $table->text('makala_description');
            $table->enum('makala_status', ['active', 'passive', 'draft']);
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
        Schema::dropIfExists('Makalalar');
    }
};

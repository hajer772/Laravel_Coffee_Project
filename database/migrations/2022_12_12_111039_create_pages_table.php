<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('link')->nullable();
            $table->string('video')->nullable();
            $table->boolean('has_link')->default(0)->nullable();
            $table->boolean('has_title')->default(0)->nullable();
            $table->boolean('has_sub_title')->default(0)->nullable();
            $table->boolean('has_description')->default(0)->nullable();
            $table->boolean('has_image')->default(0)->nullable();
            $table->boolean('has_video')->default(0)->nullable();
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
        Schema::dropIfExists('pages');
    }
}

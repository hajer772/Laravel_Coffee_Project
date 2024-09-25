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
        Schema::create('inner_pages_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inner_page_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();

            $table->unique(['inner_page_id', 'locale']);
            $table->foreign('inner_page_id')->references('id')->on('inner_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inner_pages_translations');
    }
};

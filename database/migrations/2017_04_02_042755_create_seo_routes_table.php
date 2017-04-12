<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('path');
            $table->string('title', 70)->nullable();
            $table->string('description', 150)->nullable();
            $table->string('social_title', 150)->nullable();
            $table->string('social_description', 150)->nullable();
            $table->string('social_imagen', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seo_routes');
    }
}

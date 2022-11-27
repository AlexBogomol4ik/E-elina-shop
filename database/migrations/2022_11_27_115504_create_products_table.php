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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('code');
            $table->text('description')->nullable();
            $table->text('firstImage')->nullable();
            $table->text('secondImage')->nullable();
            $table->text('thirdImage')->nullable();
            $table->text('fourthImage')->nullable();
            $table->text('fivethImage')->nullable();
            $table->double('price')->default(0);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('hit')->default(0);
            $table->tinyInteger('salary')->default(0);
            $table->double('salaryPrice')->default(0);
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
        Schema::dropIfExists('products');
    }
};

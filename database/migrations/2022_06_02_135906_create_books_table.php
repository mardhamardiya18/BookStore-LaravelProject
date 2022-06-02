<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('title');
            $table->integer('price');
            $table->longText('description');
            $table->string('slug');
            $table->string('author');
            $table->string('published');
            $table->string('photo')->nullable();
            $table->integer('pages');
            $table->string('language');
            $table->string('dimention');
            $table->integer('weight');
            $table->integer('sales_amount')->nullable();
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
        Schema::dropIfExists('books');
    }
}

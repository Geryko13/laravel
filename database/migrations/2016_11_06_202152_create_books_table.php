<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract',255);
            $table->decimal('price',5,2);
            $table->string('image',300);
            $table->date('publicdate');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')
                  ->references('id')
                  ->on('authors')
                  ->onDelete('cascade');
            $table->integer('editorial_id')->unsigned();
            $table->foreign('editorial_id')
                  ->references('id')
                  ->on('editorials')
                  ->onDelete('cascade');
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders')
                  ->onDelete('cascade');
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

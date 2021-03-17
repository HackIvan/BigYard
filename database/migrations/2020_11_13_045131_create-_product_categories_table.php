<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();

            // $table->integer('parent_id')->unsigned()->nullable()->default(null);
            // $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('casscade')->onDelete('set null');
            // $table->integer('order')-default(1);
            // $table->string('name');
            // $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->string('id', 36)->primary();
          $table->string('name');
          $table->string('slug')->unique();
          $table->string('SKU');
          $table->text('description');
          $table->text('add_info');
          $table->string('image_url');
          $table->string('price');
          $table->string('sale');
          $table->string('tax_status');
          $table->string('tax');
          $table->string('stock');
          $table->string('tags');
          $table->string('featured');
          $table->string('status');
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
        Schema::dropIfExists('product');
    }
}

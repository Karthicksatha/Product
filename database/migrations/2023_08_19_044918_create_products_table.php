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
            $table->string('product_name');
            $table->enum('unit_type', ['Qty', 'Ltr', 'KG', 'Meter']);
            $table->string('category');
            $table->string('product_images');
            $table->float('price');
            $table->float('discount_percentage');
            $table->float('discount_amount');
            $table->date('discount_range_from');
            $table->date('discount_range_to');
            $table->float('tax_percentage');
            $table->float('tax_amount');
            $table->boolean('stock_entry');
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

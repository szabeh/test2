<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1563650546498ProductProductCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('product_product_category');
    }

    public function down()
    {
        Schema::create('product_product_category', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_186058')->references('id')->on('products');
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id', 'product_category_id_fk_186058')->references('id')->on('product_categories');
        });
    }
}

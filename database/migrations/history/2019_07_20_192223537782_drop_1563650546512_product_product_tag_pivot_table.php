<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1563650546512ProductProductTagPivotTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('product_product_tag');
    }

    public function down()
    {
        Schema::create('product_product_tag', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_186059')->references('id')->on('products');
            $table->unsignedInteger('product_tag_id');
            $table->foreign('product_tag_id', 'product_tag_id_fk_186059')->references('id')->on('product_tags');
        });
    }
}

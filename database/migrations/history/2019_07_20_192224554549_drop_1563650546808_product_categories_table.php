<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1563650546808ProductCategoriesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('product_categories');
    }
}

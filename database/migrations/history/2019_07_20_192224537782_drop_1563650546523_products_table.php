<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1563650546523ProductsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('products');
    }
}

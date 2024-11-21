<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('is_active')->default(1);
            $table->date('create_at')->default(DB::raw('CURDATE()'));
            $table->date('update_at')->default(DB::raw('CURDATE()'));
        });

        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('description', 500)->nullable();
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->date('create_at')->default(DB::raw('CURDATE()'));
            $table->date('update_at')->default(DB::raw('CURDATE()'));
            $table->unsignedBigInteger('category_id');
        });

        Schema::create('Categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('Carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity');
        });

        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('order_date')->default(DB::raw('CURDATE()'));
            $table->float('total_price')->nullable();
        });

        Schema::create('OrdersDetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity');
        });

        Schema::create('Admin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Admin');
        Schema::dropIfExists('OrdersDetails');
        Schema::dropIfExists('Orders');
        Schema::dropIfExists('Carts');
        Schema::dropIfExists('Categories');
        Schema::dropIfExists('Products');
        Schema::dropIfExists('Users');
    }
}

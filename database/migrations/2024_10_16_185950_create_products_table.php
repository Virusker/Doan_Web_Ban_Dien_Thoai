<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('brand');
            $table->decimal('price', 12, 2);
            $table->integer('quantity');
            $table->text('description');
            $table->string('image');
            // $table->foreignId('id_category')->constrained('categories');
            $table->foreignId('id_category')->references('id')->on('Categories');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};

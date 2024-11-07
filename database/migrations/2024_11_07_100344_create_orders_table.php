<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('user_id');
            $table->decimal('total_price', 15, 2);
            $table->tinyInteger('status')->comment('0: Cancelled, 1: Pending, 2: Confirmed, 3: Shipping, 4: Completed')->default(1);
            $table->string('payment_method', 255);
            $table->string('customer_name', 255);
            $table->string('customer_phone', 20);
            $table->string('shipping_address', 500);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            // Indexes
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orders');
    }
};

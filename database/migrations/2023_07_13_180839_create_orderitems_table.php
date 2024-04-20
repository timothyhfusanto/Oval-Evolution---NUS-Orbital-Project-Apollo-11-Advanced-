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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->nullable();
            $table->integer('food_id')->nullable();
            $table->integer('drink_id')->nullable();
            $table->integer('qty')->nullable();
            $table->string('notes')->nullable();
            $table->string('cust_head1')->nullable();
            $table->string('cust_head2')->nullable();
            $table->string('cust_head3')->nullable();
            $table->string('cust_head4')->nullable();
            $table->string('cust_head5')->nullable();
            $table->string('head1_items')->nullable();
            $table->string('head2_items')->nullable();
            $table->string('head3_items')->nullable();
            $table->string('head4_items')->nullable();
            $table->string('head5_items')->nullable();
            $table->string('head1_price')->nullable();
            $table->string('head2_price')->nullable();
            $table->string('head3_price')->nullable();
            $table->string('head4_price')->nullable();
            $table->string('head5_price')->nullable();      
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
        Schema::dropIfExists('orderitems');
    }
};

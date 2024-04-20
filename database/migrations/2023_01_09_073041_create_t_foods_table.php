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
        Schema::create('t_food', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('price_in_sgd')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('del_stat')->default(1);
            $table->string('cust_head1')->nullable();
            $table->string('cust_head2')->nullable();
            $table->string('cust_head3')->nullable();
            $table->string('cust_head4')->nullable();
            $table->string('cust_head5')->nullable();
            $table->string('requirements1')->nullable();
            $table->string('requirements2')->nullable();
            $table->string('requirements3')->nullable();
            $table->string('requirements4')->nullable();
            $table->string('requirements5')->nullable();
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
        Schema::dropIfExists('t_food');
    }
};

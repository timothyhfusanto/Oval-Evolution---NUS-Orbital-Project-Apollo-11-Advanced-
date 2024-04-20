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
        Schema::create('t_order', function (Blueprint $table) {
            $table->id();
            $table->integer('queue')->nullable();
            $table->integer('user_id')->nullable();
            $table->double('total_price')->nullable();
            $table->string('status')->default('Pending');
            $table->string('payment_mode');
            $table->string('payment_id')->nullable();
            $table->string('del_stat')->default(1);
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
        Schema::dropIfExists('t_order');
    }
};

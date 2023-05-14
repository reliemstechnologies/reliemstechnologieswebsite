<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('payments',function(Blueprint $table) {
            $table->id();
            $table->string('mobile_number');
            $table->Integer('amount');
            $table->string('payment_id')->nullable();
            $table->string('razorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);
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
        //
    }
}

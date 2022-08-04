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
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 255);
            $table->string('type', 45);
            $table->integer('bank');
            $table->string('district', 255);
            $table->string('city', 255);
            $table->string('postal_code', 100);
            $table->integer('payment_id');
            $table->dateTime('payment_date');
            $table->double('payment_amount');
            $table->string('card',45);
            $table->integer('card_no');
            $table->tinyInteger('merchant_status');
            $table->string('currency',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};

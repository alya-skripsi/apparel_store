<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('no_hp');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->unsignedBigInteger('subtotal')->default(0);
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('tracking_number')->nullable();
            $table->enum('payment_status', ['1', '2', '3'])->comment('1=menunggu pembayaran, 2=sudah dibayar, 3=kadaluarsa');
            $table->string('snap_token', 36)->nullable();
            $table->string('courier')->nullable();
            $table->string('cost_delivery')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

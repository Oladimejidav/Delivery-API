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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('trackingNumber');
            $table->string('description');
            $table->string('sender');
            $table->string('recipient');
            $table->bigInteger('customer_id');
            $table->string('weight');
            $table->string('distance');
            $table->string('dimensions');
            $table->string('shipmentValue');
            $table->string('shippingType');
            $table->string('isAccepted')->default(0);
            $table->string('isShipped')->default(0);
            $table->string('shippingDate');
            $table->string('deliveryDate');
            $table->string('trackingHistory');
            $table->string('imageUri');
            $table->string('shippingCost');

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
        Schema::dropIfExists('packages');
    }
};

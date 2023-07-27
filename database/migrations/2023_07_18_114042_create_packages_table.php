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
            $table->string('trackingNumber')->nullable();
            $table->string('description')->nullable();
            $table->string('sender')->nullable();
            $table->string('recipient')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->string('weight')->nullable();
            $table->string('distance')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('shipmentValue')->nullable();
            $table->string('shippingType')->nullable();
            $table->string('isAccepted')->default(0);
            $table->string('isShipped')->default(0);
            $table->string('shippingDate')->nullable();
            $table->string('deliveryDate')->nullable();
            $table->string('trackingHistory')->nullable();
            $table->string('imageUri')->nullable();
            $table->string('shippingCost')->nullable();

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

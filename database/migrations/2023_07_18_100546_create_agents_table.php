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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('date_of_birth')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('pasport')->nullable();
            $table->string('personal_id')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('guarantor_phoneNumber')->nullable();
            $table->string('guarantor_pasport')->nullable();
            $table->string('guarantor_personal_id')->nullable();
            $table->string('guarantor_nationality')->nullable();
            $table->string('guarantor_state')->nullable();
            $table->string('guarantor_address')->nullable();
            $table->bigInteger('agent_role')->default(0);
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
        Schema::dropIfExists('agents');
    }
};

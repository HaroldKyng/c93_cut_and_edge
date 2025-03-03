<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModesTable extends Migration
{
    public function up()
    {
        Schema::create('payment_modes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Include soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_modes');
    }
}

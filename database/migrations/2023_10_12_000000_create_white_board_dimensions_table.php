<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhiteBoardDimensionsTable extends Migration
{
    public function up()
    {
        Schema::create('white_board_dimensions', function (Blueprint $table) {
            $table->id();
            $table->string('white_board_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Include soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('white_board_dimensions');
    }
}

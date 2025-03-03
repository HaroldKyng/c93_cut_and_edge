<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhiteBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('white_boards', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('white_boards');
    }
}

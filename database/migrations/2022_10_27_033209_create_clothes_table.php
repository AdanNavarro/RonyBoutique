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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trademark_id')->constrained('trademarks')->cascadeOnUpdate();
            $table->foreignId('type_clothes_id')->constrained('type_clothes')->cascadeOnUpdate();
            $table->string('size',10);
            $table->string('description',50);
            $table->unsignedDecimal('price');
            $table->unsignedInteger('stock');
            $table->string('status');
            $table->string('img',70);
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
        Schema::dropIfExists('clothes');
    }
};

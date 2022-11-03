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
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->foreignId('folio_sale')->constrained('sales','folio_number')->restrictOnDelete();
            $table->foreignId('id_clothe')->constrained('clothes');
            $table->integer('amount');
            $table->unsignedBigInteger('subtotal');
            $table->integer('tax');
            $table->unsignedBigInteger('total');
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
        Schema::dropIfExists('detail_sales');
    }
};

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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('folio_number');
            $table->foreignId('worker_id')->constrained('workers','user_id')->cascadeOnUpdate();
            $table->foreignId('client_id')->constrained('clients','user_id')->cascadeOnUpdate();
            $table->string('type_sale');
            $table->timestamps();
            $table->float('subtotal');
            $table->float('tax');
            $table->float('total');    
            $table->String('status');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};

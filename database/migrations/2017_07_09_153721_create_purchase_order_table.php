<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order', function(Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->nullable();
            $table->string('customer_po_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('amount')->nullable();
            $table->datetime('promised_delivery_date')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('dr_id')->nullable();
            $table->string('actual_delivery_date')->nullable();
            $table->integer('days')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
        echo 'Migrated purchase_order table.';
        echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_order');
    }
}

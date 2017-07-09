<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table){
            $table->increments('id');
            $table->integer('inventory_id')->nullable();
            $table->integer('outbound_quantity')->nullable();
            $table->integer('customer_id')->nullable();
            $table->float('selling_price')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('dr_id')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
        echo 'Migrated transactions table.';
        echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

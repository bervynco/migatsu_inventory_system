<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table){
            $table->increments('id');
            $table->string('product_id')->nullable();
            $table->text('product_description')->nullable();
            $table->string('location')->nullable();
            $table->integer('balance')->nullable();
            $table->float('purchase_price')->nullable();
            $table->integer('threshold')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        echo 'Migrated inventory table.';
        echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}

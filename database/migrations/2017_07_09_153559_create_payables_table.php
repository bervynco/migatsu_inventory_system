<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('payables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('tin')->nullable();
            $table->string('po_id')->nullable();
            $table->datetime('delivery_date')->nullable();
            $table->string('supplier_dr_id')->nullable();
            $table->integer('terms')->nullable();
            $table->dateTime('due_date')->nullable(); // can be deleted
            $table->integer('overdue_days')->nullable();//can be deleted
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        echo 'Migrated payables table.';
        echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payables');
    }
}

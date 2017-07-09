<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('receivables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('tin')->nullable();
            $table->string('po_id')->nullable();
            $table->datetime('delivery_date')->nullable();
            $table->float('amount')->nullable();
            $table->string('invoice_id')->nullable();
            $table->integer('terms')->nullable();
            $table->dateTime('due_date')->nullable(); // can be deleted
            $table->integer('overdue_days')->nullable();//can be deleted
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

         echo 'Migrated receivables table.';
         echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('receivables');
    }
}

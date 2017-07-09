<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduled_delivery', function (Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->nullable();
            $table->string('po_id')->nullable();
            $table->integer('personnel_id')->nullable();
            $table->string('delivery_personnel_name')->nullable();
            $table->timestamps();
        });

        echo 'Migrated scheduled_delivery table.';
        echo '<br>';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduled_delivery');
    }
}

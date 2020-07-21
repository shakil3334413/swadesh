<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEachbusIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eachbus_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->integer('trip_number');
            $table->string('driver_salary');
            $table->string('bus_cost');
            $table->integer('gpcost');
            $table->integer('each_income');
            $table->integer('total_income');
            $table->integer('total_cost');
            $table->integer('todaycarincome');
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
        Schema::dropIfExists('eachbus_incomes');
    }
}

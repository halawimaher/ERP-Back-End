<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_kpis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('evaluation');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('kpi_id');

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('kpi_id')->references('id')->on('kpis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_kpis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('employee_id');
            $table->time('time_in')->nullable();
            $table->date('in_date')->nullable();
            $table->boolean('in_status');
            $table->time('time_out')->nullable();
            $table->date('out_date')->nullable();
            $table->boolean('out_status')->nullable();
            $table->string('app_user');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}

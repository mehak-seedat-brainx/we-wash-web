<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_laundry', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->string('weight')->nullable();
            $table->float('charges')->nullable();
            $table->string('status');
            $table->string('payment_status')->nullable();
            $table->boolean('laundromat_payment')->default(false);
            $table->boolean('ambassador_payment')->default(false);
            $table->boolean('manager_payment')->default(false);
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
        Schema::dropIfExists('student_laundry');
    }
}

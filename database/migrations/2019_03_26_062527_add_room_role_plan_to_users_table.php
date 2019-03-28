<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomRolePlanToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('room_id')->nullable();
            $table->unsignedInteger('plan_id')->nullable();
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('plan_id')->references('id')->on('plans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign('role_id');
            $table->dropForeign('room_id');
            $table->dropForeign('plan_id');
            $table->dropColumn('room_id');
            $table->dropColumn('plan_id');
            $table->dropColumn('role_id');

        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('img_url')->nullable();
            $table->string('device_token')->nullable();
            $table->string('type');
            $table->string('api_token');
            $table->boolean('is_logged_in')->default(true);
            $table->float('commission')->default(true);
            $table->boolean('is_active')->default(true);
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

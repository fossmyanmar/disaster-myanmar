<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('mm_name')->nullable();
            $table->string('founder', 100)->nullable();
            $table->string('mm_founder')->nullable();
            $table->string('registration_number', 100)->nullable();
            $table->integer('volunteers_count')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->text('address')->nullable();
            $table->text('bank_account')->nullable();
            $table->date('founded_date')->nullable();
            $table->string('slogan')->nullable();
            $table->string('type');
            $table->string('password', 60);
            $table->string('role');
            $table->boolean('is_approve')->default(false);
            $table->rememberToken();
            $table->text('remark')->nullable();
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
        Schema::drop('ngos');
    }
}

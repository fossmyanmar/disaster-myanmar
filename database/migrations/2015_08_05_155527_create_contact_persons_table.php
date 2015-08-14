<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('mm_name')->nullable();
            $table->string('phone', 100);
            $table->string('email', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('website', 100)->nullable();

            $table->text('address');
            $table->string('nrc', 100);
            $table->integer('ngo_id')->unsigned()->nullable();
            $table->foreign('ngo_id')
            ->references('id')->on('ngos')
            ->onDelete('cascade');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('type', 60)->nullable();
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
        Schema::drop('contact_persons');
    }
}

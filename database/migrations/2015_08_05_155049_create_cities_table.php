<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name', 100);
             $table->string('mm_name')->nullable();
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')
            ->references('id')->on('states')
            ->onDelete('cascade');
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->string('position_code', 50)->nullable();
            $table->integer('population')->nullable();
            $table->boolean('is_district')->default(false);
            $table->integer('district_id')->default(null);
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
        Schema::drop('cities');
    }
}

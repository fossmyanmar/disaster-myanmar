<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->increments('id');
              $table->string('name', 100);
              $table->string('mm_name')->nullable();
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
            ->references('id')->on('cities')
            ->onDelete('cascade');
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->string('position_code', 50)->nullable();
            $table->integer('number_of_houses')->nullable();
            $table->integer('population')->nullable();
            $table->boolean('village_tract')->default(false);
            $table->integer('village_tract_id')->nullable()->default(null);
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
        Schema::drop('villages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('car_name');
            $table->string('rent_cost');
            $table->string('car_image');
            $table->boolean('available')->nullable();
            $table->string('availableAt');
            $table->string('sizeCar_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes('deleted_at');
            $table->timestamps();

            //foreign
            // $table->foreign('sizeCar_id')
            //     ->nullable()
            //     ->references('id')
            //     ->on('Capacity')
            //     ->onUpdate('cescade');
            // $table->foreign('created_by')
            //     ->nullable()
            //     ->references('id')
            //     ->on('users')
            //     ->onUpdate('cescade');
            // $table->foreign('updated_by')
            //     ->nullable()
            //     ->references('id')
            //     ->on('users')
            //     ->onUpdate('cescade');
            // $table->foreign('deleted_by')
            //     ->nullable()
            //     ->references('id')
            //     ->on('users')
            //     ->onUpdate('cescade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};

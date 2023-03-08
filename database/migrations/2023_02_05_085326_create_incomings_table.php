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
        Schema::create('incoming', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->string('flight_number');
            $table->string('origin');
            $table->string('destination');
            $table->date('flight_date');
            $table->time('arrival_time');
            $table->string('type_of_goods');
            $table->string('awb_num');
            $table->date('awb_date');
            $table->string('agent');
            $table->string('consignee');
            $table->integer('pieces');
            $table->integer('weight');
            $table->string('commodity');
            $table->string('acceptance');
            $table->enum('status_create_inv', ['0','1'])->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming');
    }
};

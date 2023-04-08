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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('code_transport',8)->unique()->nullable();
            $table->string('name_transport',128)->unique()->nullable();
            $table->string('type_transport',128)->nullable();
            $table->string('shipper',128)->nullable();
            $table->decimal('height',13,3)->nullable();
            $table->decimal('length',13,3)->nullable();
            $table->decimal('volume',13,3)->nullable();
            $table->decimal('weight',13,3)->nullable();
            $table->decimal('width',13,3)->nullable();
            $table->string('unit_height',10)->nullable();
            $table->string('unit_length',10)->nullable();
            $table->string('unit_volume',10)->nullable();
            $table->string('unit_weight',10)->nullable();
            $table->string('unit_width',10)->nullable();
            $table->decimal('time_in_line',3,0)->nullable();
            $table->decimal('unloading_time',3,0)->nullable();
            $table->string('unit_line_up',10)->nullable();
            $table->string('unit_unloading',10)->nullable();
            $table->string('bien_so',32)->nullable();
            $table->string('status',1)->nullable();
            $table->decimal('user_id0',3,0)->nullable();
            $table->decimal('user_id2',3,0)->nullable();
            $table->string('code_td1',16)->nullable();
            $table->string('code_td2',16)->nullable();
            $table->string('code_td3',16)->nullable();
            $table->decimal('qty_td1',16,4)->nullable();
            $table->decimal('qty_td2',16,4)->nullable();
            $table->decimal('qty_td3',16,4)->nullable();
            $table->dateTime('day_td1')->nullable();
            $table->dateTime('day_td2')->nullable();
            $table->string('s1',16)->nullable();
            $table->string('s2',16)->nullable();
            $table->string('s3',16)->nullable();
            $table->decimal('s4',16,4)->nullable();
            $table->decimal('s5',16,4)->nullable();
            $table->decimal('s6',16,4)->nullable();
            $table->dateTime('s7')->nullable();
            $table->dateTime('s8')->nullable();
            $table->dateTime('s9')->nullable();


























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
        Schema::dropIfExists('transports');
    }
};

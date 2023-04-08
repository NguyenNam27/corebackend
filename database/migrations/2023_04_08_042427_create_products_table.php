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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sp',16)->unique()->nullable();
            $table->string('ten_sp',128)->unique()->nullable();
            $table->string('ten_sp2',128)->unique()->nullable();
            $table->decimal('sp_ct',1,0)->nullable();
            $table->string('ma_sp0',16)->nullable();
            $table->decimal('bac_sp',1,0)->nullable();
            $table->decimal('loai_sp',1,0)->nullable();
            $table->string('status',16)->nullable();
            $table->decimal('user_id0',3,0)->nullable();
            $table->decimal('user_id2',3,0)->nullable();
            $table->string('ma_td1',16)->nullable();
            $table->string('ma_td2',16)->nullable();
            $table->string('ma_td3',16)->nullable();
            $table->decimal('sl_td1',16,4)->nullable();
            $table->decimal('sl_td2',16,4)->nullable();
            $table->decimal('sl_td3',16,4)->nullable();
            $table->dateTime('ngay_td1')->nullable();
            $table->dateTime('ngay_td2')->nullable();
            $table->dateTime('ngay_td3')->nullable();
            $table->string('gc_td1',16)->nullable();
            $table->string('gc_td2',16)->nullable();
            $table->string('gc_td3',16)->nullable();
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
        Schema::dropIfExists('products');
    }
};

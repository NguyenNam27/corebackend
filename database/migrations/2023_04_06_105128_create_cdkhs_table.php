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
        Schema::create('cdkhs', function (Blueprint $table) {
            $table->decimal('nam','4',0)->primary();
            $table->char('ma_dvcs',8);
            $table->char('tk');
            $table->char('ma_hd');
            $table->decimal('du_no00',16,2);
            $table->decimal('du_co00',16,2);
            $table->decimal('du_no_nt00',16,2);
            $table->decimal('du_co_nt00',16,2);
            $table->string('dien_giai',512);
            $table->char('ma_nt',3);
            $table->decimal('ty_gia',24,12);
            $table->char('status',1);
            $table->dateTime('datetime0');
            $table->dateTime('datetime2');
            $table->decimal('user_id0',3,0);
            $table->decimal('user_id2',3,0);
            $table->char('ma_td1',16);
            $table->char('ma_td2',16);
            $table->char('ma_td3',16);
            $table->decimal('sl_td1',16,4);
            $table->decimal('sl_td2',16,4);
            $table->decimal('sl_td3',16,4);
            $table->dateTime('ngay_td1');
            $table->dateTime('ngay_td2');
            $table->dateTime('ngay_td3');
            $table->char('s1',16);
            $table->char('s2',16);
            $table->char('s3',16);
            $table->decimal('s4',16,4);
            $table->decimal('s5',16,4);
            $table->decimal('s6',16,4);
            $table->dateTime('s7');
            $table->dateTime('s8');
            $table->dateTime('s9');
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
        Schema::dropIfExists('cdkhs');
    }
};

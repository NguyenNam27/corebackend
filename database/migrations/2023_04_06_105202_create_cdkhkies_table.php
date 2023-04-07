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
        Schema::create('cdkhkies', function (Blueprint $table) {
            $table->decimal('nam','4',0)->primary();
            $table->char('ma_dvcs',8);
            $table->char('tk');
            $table->char('ma_kh');
            $table->decimal('du_no00',16,2);
            $table->decimal('du_co00',16,2);
            $table->decimal('du_no_nt00',16,2);
            $table->decimal('du_co_nt00',16,2);

            $table->decimal('du_no1',16,2);
            $table->decimal('du_co1',16,2);
            $table->decimal('du_no_nt1',16,2);
            $table->decimal('du_co_nt1',16,2);
            $table->dateTime('datetime0');

            $table->dateTime('datetime2');
            $table->decimal('user_id0',3,0);
            $table->decimal('user_id2',3,0);
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
        Schema::dropIfExists('cdkhkies');
    }
};

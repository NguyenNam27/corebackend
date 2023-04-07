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
        Schema::create('binnfos', function (Blueprint $table) {
            $table->string('form_id1',10)->nullable();
            $table->string('form_id2',10)->nullable();
            $table->string('form_type',10)->nullable();
            $table->string('form_name',255)->unique()->nullable();
            $table->string('form_name2',255)->unique()->nullable();
            $table->bigInteger('form_order')->nullable();
            $table->string('form_users',2000)->nullable();
            $table->string('temp',255)->nullable();

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
        Schema::dropIfExists('binnfos');
    }
};

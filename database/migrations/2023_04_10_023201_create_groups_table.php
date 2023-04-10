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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('account_type')->nullable();
            $table->bigInteger('role');
            $table->mediumText('string-role')->nullable();
            $table->dateTime('date_created')->nullable();
            $table->dateTime('date_updated')->nullable();
//            $table->bigInteger('created_by_id')->nullable();
//            $table->bigInteger('updated_by_id')->nullable();

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
        Schema::dropIfExists('groups');
    }
};

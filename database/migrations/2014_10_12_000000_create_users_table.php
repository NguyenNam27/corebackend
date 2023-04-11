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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->nullable();
            $table->string('email',30)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',)->nullable();
            $table->string('user_type',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('gender',50)->nullable();
            $table->text('comment')->nullable();
            $table->text('r_access')->nullable();
            $table->text('r_new')->nullable();
            $table->text('r_del')->nullable();
            $table->text('r_edit')->nullable();
            $table->text('r_read')->nullable();
            $table->text('r_edit_all')->nullable();
            $table->text('r_del_all')->nullable();
            $table->text('r_print')->nullable();
            $table->text('r_post')->nullable();
            $table->decimal('group_id',3,0)->nullable();
            $table->text('menu_hide')->nullable();
            $table->tinyInteger('language')->nullable();
            $table->string('status',1)->default(1);
            $table->decimal('user_id0',3,0)->nullable();
            $table->string('ma_td1',16)->nullable();
            $table->string('ma_td2',16)->nullable();
            $table->string('ma_td3',16)->nullable();
            $table->dateTime('ngay_td1')->nullable();
            $table->dateTime('ngay_td2')->nullable();
            $table->dateTime('ngay_td3')->nullable();
            $table->string('gc_td1',64)->nullable();
            $table->string('gc_td2',64)->nullable();
            $table->string('gc_td3',64)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

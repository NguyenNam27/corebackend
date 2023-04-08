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
            $table->string('name',30)->unique();
            $table->string('comment',30)->nullable();
            $table->string('comment2',30)->nullable();
            $table->tinyInteger('admin')->nullable();
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
            $table->string('email')->nullable();
            $table->string('status',1)->nullable();
            $table->decimal('user_id0',3,0)->nullable();

            $table->decimal('user_id2',3,0)->nullable();
            $table->string('ma_td1',16)->nullable();
            $table->string('ma_td2',16)->nullable();
            $table->string('ma_td3',16)->nullable();
            $table->dateTime('ngay_td1')->nullable();
            $table->dateTime('ngay_td2')->nullable();
            $table->dateTime('ngay_td3')->nullable();
            $table->string('gc_td1',64)->nullable();
            $table->string('gc_td2',64)->nullable();
            $table->string('gc_td3',64)->nullable();

            $table->string('s1',16)->nullable();
            $table->string('s2',16)->nullable();
            $table->string('s3',16)->nullable();
            $table->decimal('s4',16,4)->nullable();
            $table->decimal('s5',16,4)->nullable();
            $table->decimal('s6',16,4)->nullable();
            $table->decimal('s7',16,4)->nullable();
            $table->decimal('s8',16,4)->nullable();
            $table->decimal('s9',16,4)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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

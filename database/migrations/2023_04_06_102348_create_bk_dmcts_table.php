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
        Schema::create('bk_dmcts', function (Blueprint $table) {
//            $table->id();
            $table->char('ma_phan_he',2)->nullable();
            $table->char('ma_ct',3)->nullable();
            $table->string('ten_ct')->nullable();
            $table->string('ten_ct2',128)->nullable();
            $table->char('ma_ct_me',3)->nullable();
            $table->integer('so_ct')->nullable();
            $table->char('ma_nt',3)->nullable();
            $table->char('ma_ct_in',3)->nullable();
            $table->tinyInteger('so_lien',)->nullable();
            $table->string('tieu_de_ct',128)->nullable();
            $table->string('tieu_de_ct2',128)->nullable();
            $table->tinyInteger('stt_ct_nkc')->nullable();
            $table->tinyInteger('stt_ctntxt')->nullable();
            $table->tinyInteger('ct_nxt',)->nullable();
            $table->char('m_ctdbf',8)->nullable();
            $table->char('m_phdbf',8)->nullable();
            $table->tinyInteger('post_type',)->nullable();
            $table->char('dk_ctgs',10)->nullable();
            $table->tinyInteger('stt',)->nullable();
            $table->tinyInteger('max_row',)->nullable();
            $table->tinyInteger('v_nbr_blank_yn',)->nullable();
            $table->tinyInteger('v_nbr_unit_yn',)->nullable();
            $table->tinyInteger('v_nbr_user_yn',)->nullable();
            $table->tinyInteger('v_nbr_auto_yn',)->nullable();
            $table->char('v_nbr_fields',128)->nullable();
            $table->char('m_status',1)->nullable();
            $table->char('m_ma_nk',3)->nullable();
            $table->char('m_ma_gd',2)->nullable();
            $table->char('m_loai_ct',2)->nullable();
            $table->tinyInteger('m_ma_td1')->nullable();
            $table->tinyInteger('m_ma_td2')->nullable();
            $table->tinyInteger('m_ma_td3')->nullable();
            $table->tinyInteger('m_sl_ct0')->nullable();
            $table->decimal('m_trung_so',2,0)->nullable();
            $table->tinyInteger('m_loc_nsd')->nullable();
            $table->tinyInteger('m_ong_ba')->nullable();
            $table->tinyInteger('m_ngay_ct')->nullable();
            $table->char('m_phdbfs',24)->nullable();
            $table->char('m_ctdbfs',24)->nullable();
            $table->tinyInteger('post_vv')->nullable();
            $table->tinyInteger('post_sp')->nullable();
            $table->tinyInteger('post_bp')->nullable();
            $table->tinyInteger('post_hd')->nullable();
            $table->tinyInteger('post_ku')->nullable();
            $table->tinyInteger('post_phi')->nullable();
            $table->tinyInteger('post_dot')->nullable();
            $table->tinyInteger('post_nvbh')->nullable();
            $table->tinyInteger('post_lsx')->nullable();
            $table->tinyInteger('post_td1')->nullable();
            $table->tinyInteger('post_td2')->nullable();
            $table->tinyInteger('post_td3')->nullable();
            $table->tinyInteger('voucher_yn')->nullable();
            $table->char('fs_post',32)->nullable();
            $table->char('xstatus',1)->nullable();
            $table->integer('xgl',)->default(0)->nullable();
            $table->integer('xin',)->default(0)->nullable();
            $table->char('xin_type',1)->nullable();
            $table->char('xin_p_update',1)->nullable();
            $table->string('xin_loai_ct',16)->nullable();
            $table->decimal('so_tc',16,0)->nullable();
            $table->char('edition',1)->nullable();
            $table->char('status',1)->nullable();
            $table->char('status_lp',1)->nullable();
            $table->dateTime('datetime0',)->nullable();
            $table->dateTime('datetime2',)->nullable();
            $table->decimal('user_id0',3,0)->nullable();
            $table->decimal('user_id2',3,0)->nullable();
            $table->char('ma_td1',16)->nullable();
            $table->char('ma_td2',16)->nullable();
            $table->char('ma_td3',16)->nullable();
            $table->decimal('sl_td1',16,4)->nullable();
            $table->decimal('sl_td2',16,4)->nullable();
            $table->decimal('sl_td3',16,4)->nullable();
            $table->dateTime('ngay_td1')->nullable();
            $table->dateTime('ngay_td2')->nullable();
            $table->dateTime('ngay_td3')->nullable();
            $table->decimal('gc_td1',16,4)->nullable();
            $table->decimal('gc_td2',16,4)->nullable();
            $table->decimal('gc_td3',16,4)->nullable();
            $table->char('s1',16)->nullable();
            $table->char('s2',16)->nullable();
            $table->char('s3',16)->nullable();
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
        Schema::dropIfExists('bk_dmcts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('tlahir');
            $table->date('tgllahir');
            $table->enum('jnsklmn', ['Pria', 'Wanita']);
            $table->string('noktp');
            $table->string('bnoktp');
            $table->string('agama');
            $table->string('ibukandung');
            $table->string('notlp');
            $table->enum('statuskawin', ['Belum Nikah', 'Nikah', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('thnstatuskawin');
            $table->string('address');
            $table->string('rtrw');
            $table->string('kel');
            $table->string('kec');
            $table->string('kab');
            $table->string('kodepos');
            $table->string('prov');
            $table->string('domisili');
            $table->string('dom_rtrw');
            $table->string('dom_kel');
            $table->string('dom_kec');
            $table->string('dom_kab');
            $table->string('dom_prov');
            $table->enum('stts_tmpttgl', ['Hak Milik', 'Kontrak', 'Menumpang Wali', 'Rumah Dinas', 'Kos']);
            $table->string('stts_tmpttgl_lain')->nullable();
            $table->enum('pend_terakhir', ['MI', 'SD', 'SLTP', 'SLTA', 'D1 , D2', 'S1 , S2']);
            $table->string('pend_terakhir_thn');
            $table->string('pkrjaan');
            $table->string('gaji_perbulan');
            $table->enum('jns_prmohn', ['Tabungan Sahabat Muslim', 'Tabungan Idul Fitri', 'Tabungan Qurban', 'Tabungan Umroh', 'Tabungan Pendidikan']);
            $table->string('nom_tab');
            $table->enum('nom_tab_per', ['Per-Bulan', 'Per-Minggu', 'Per-Hari']);
            $table->string('nom_tab_terbilang');
            $table->longText('info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental');
    }
}

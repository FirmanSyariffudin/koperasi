<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('tmpt_lahir');
            $table->date('due');
            $table->string('jns_klamin');
            $table->string('no_tlp');
            $table->string('no_orgdkt');
            $table->string('stts_kawin');
            $table->string('thn_kawin');
            $table->string('address');
            $table->string('rtrw');
            $table->string('kel');
            $table->string('kec');
            $table->string('kab');
            $table->string('kode_pos');
            $table->string('prov');
            $table->string('domisili');
            $table->string('dom_rtrw');
            $table->string('dom_kel');
            $table->string('dom_kec');
            $table->string('dom_kab');
            $table->string('dom_prov');
            $table->string('stts_rmhtgl');
            $table->string('rmhtgl_lain');
            $table->string('pend_trakhir');
            $table->string('pend_lain')->nullable();
            $table->string('pkerjaan');
            $table->string('prusahaan');
            $table->string('jabatan');
            $table->string('almt_prshaan');
            $table->string('ikut_tgjwb');
            $table->string('stts_hub');
            $table->string('no_prusahaan');
            $table->string('tg_kluarga');
            $table->string('pendapatan');
            $table->string('ket_pendapatan');
            $table->string('jml_pngajuan');
            $table->string('terbilang');
            $table->string('jml_disetujui');
            $table->string('jml_disetujui2')->nullable();
            $table->string('jml_disetujui3')->nullable();
            $table->string('jml_disetujui4')->nullable();
            $table->longText('keperluan')->nullable();
            $table->string('jngka_wkt');
            $table->string('akad_pemb');
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
        Schema::dropIfExists('equipment');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'request';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'tmpt_lahir',
        'due',
        'jns_klamin',
        'no_tlp',
        'no_orgdkt',
        'stts_kawin',
        'thn_kawin',
        'address',
        'rtrw',
        'kel',
        'kec',
        'kab',
        'kode_pos',
        'prov',
        'domisili',
        'dom_rtrw',
        'dom_kel',
        'dom_kec',
        'dom_kab',
        'dom_prov',
        'stts_rmhtgl',
        'pend_trakhir',
        'pend_lain',
        'pkerjaan',
        'prusahaan',
        'jabatan',
        'almt_prshaan',
        'ikut_tgjwb',
        'stts_hub',
        'no_prusahaan',
        'tg_kluarga',
        'pendapatan',
        'ket_pendapatan',
        'jml_pngajuan',
        'terbilang',
        'jml_disetujui',
        'jml_disetujui2',
        'jml_disetujui3',
        'jml_disetujui4',
        'keperluan',
        'jngka_wkt',
        'akad_pemb',
        'info',
    ];

    public function relationRoom()
    {
        return $this->belongsTo('App\Models\Room', 'location', 'id');
    }
}

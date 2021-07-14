<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'member';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'tlahir',
        'tgllahir',
        'jnsklmn',
        'noktp',
        'bnoktp',
        'agama',
        'ibukandung',
        'notlp',
        'statuskawin',
        'thnstatuskawin',
        'address',
        'rtrw',
        'kel',
        'kec',
        'kab',
        'kodepos',
        'prov',
        'domisili',
        'dom_rtrw',
        'dom_kel',
        'dom_kec',
        'dom_kab',
        'dom_prov',
        'stts_tmpttgl',
        'stts_tmpttgl_lain',
        'pend_terakhir',
        'pend_terakhir_thn',
        'pkrjaan',
        'gaji_perbulan',
        'jns_prmohn',
        'nom_tab',
        'nom_tab_per',
        'nom_tab_terbilang',
        'info'
    ];
}

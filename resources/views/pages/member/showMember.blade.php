@extends('layouts.default')
@section('title', __('pages.title').__(' | Lihat Anggota Koperasi'))
@section('titleContent', __('Lihat Anggota Koperasi'))
@section('headerBack')
<div class="section-header-back">
    <a href="{{ route('member.index') }}" class="btn btn-icon">
        <i class="fas fa-arrow-left"></i>
    </a>
</div>
@endsection
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Anggota Koperasi') }}</div>
<div class="breadcrumb-item active">{{ __('Lihat Anggota Koperasi') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ $member->code }}</h2>
<p class="section-lead">
    {{ __('ID yang digunakan untuk mengidentifikasi setiap anggota') }}
</p>
<div class="card">
    <form method="POST" action="{{ route('member.store') }}">
        @csrf
        <!-- <input type="hidden" value="{{ $code }}" name="code"> -->
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nama Lengkap') }}<code>*</code></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $member->name }}" readonly>
                        @error('name')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tempat Lahir') }}<code>*</code></label>
                        <input type="text" class="form-control @error('tlahir') is-invalid @enderror" name="tlahir"
                        value="{{ $member->tlahir }}" readonly>
                        @error('tlahir')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tanggal Lahir') }}<code>*</code></label>
                        <input type="text" class="form-control datepicker @error('tgllahir') is-invalid @enderror"
                            name="tgllahir" value="{{ $member->tgllahir }}" readonly>
                        @error('tgllahir')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">{{ __('Jenis Kelamin') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="jnsklmn" value="Pria" class="selectgroup-input" {{ $member->jnsklmn == 'Pria' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Pria') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jnsklmn" value="Wanita" class="selectgroup-input" {{ $member->jnsklmn == 'Wanita' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Wanita') }}</span>
                            </label>
                        </div>
                        @error('jnsklmn')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No KTP/SIM') }}<code>*</code></label>
                        <input type="text" class="form-control @error('noktp') is-invalid @enderror" name="noktp"
                        value="{{ $member->noktp }}" readonly>
                        @error('noktp')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Berlaku KTP/SIM s/d') }}<code>*</code></label>
                        <input type="text" class="form-control @error('bnoktp') is-invalid @enderror" name="bnoktp"
                        value="{{ $member->bnoktp }}" readonly>
                        @error('bnoktp')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Agama') }}<code>*</code></label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama"
                        value="{{ $member->agama }}" readonly>
                        @error('agama')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nama Ibu Kandung') }}<code>*</code></label>
                        <input type="text" class="form-control @error('ibukandung') is-invalid @enderror"
                            name="ibukandung" value="{{ $member->ibukandung }}" readonly>
                        @error('ibukandung')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No Telp / HP') }}<code>*</code></label>
                        <input type="text" class="form-control @error('notlp') is-invalid @enderror" name="notlp"
                        value="{{ $member->notlp }}" readonly>
                        @error('notlp')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label class="form-label">{{ __('Status Perkawinan') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="statuskawin" value="Belum Nikah" class="selectgroup-input" {{ $member->statuskawin == 'Belum Nikah' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Belum Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="statuskawin" value="Nikah" class="selectgroup-input" {{ $member->statuskawin == 'Nikah' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="statuskawin" value="Cerai Hidup" class="selectgroup-input" {{ $member->statuskawin == 'Cerai Hidup' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Cerai Hidup') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="statuskawin" value="Cerai Mati" class="selectgroup-input" {{ $member->statuskawin == 'Cerai Mati' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Cerai Mati') }}</span>
                            </label>
                        </div>
                        @error('statuskawin')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tahun Status') }}<code>*</code></label>
                        <input type="text" class="form-control @error('thnstatuskawin') is-invalid @enderror"
                            name="thnstatuskawin" value="{{ $member->thnstatuskawin }}" readonly>
                        @error('thnstatuskawin')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label>{{ __('Alamat Sesuai KTP') }}<code>*</code></label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        value="{{ $member->address }}" readonly>
                        @error('address')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('RT / RW') }}<code>*</code></label>
                        <input type="text" class="form-control @error('rtrw') is-invalid @enderror" name="rtrw"
                        value="{{ $member->rtrw }}" readonly>
                        @error('rtrw')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kelurahan / Desa') }}<code>*</code></label>
                        <input type="text" class="form-control @error('kel') is-invalid @enderror" name="kel" value="{{ $member->kel }}" readonly>
                        @error('kel')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kecamatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{ $member->kec }}" readonly>
                        @error('kec')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kabupaten / Kota') }}<code>*</code></label>
                        <input type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{ $member->kab }}" readonly>
                        @error('kab')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kode Pos') }}<code>*</code></label>
                        <input type="text" class="form-control @error('kodepos') is-invalid @enderror" name="kodepos"
                        value="{{ $member->kodepos }}" readonly>
                        @error('kodepos')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Provinsi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('prov') is-invalid @enderror" name="prov"
                        value="{{ $member->prov }}" readonly>
                        @error('prov')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label>{{ __('Domisili / Tempat Tinggal') }}<code>*</code></label>
                        <input type="text" class="form-control @error('domisili') is-invalid @enderror" name="domisili"
                        value="{{ $member->domisili }}" readonly>
                        @error('domisili')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('RT / RW') }}<code>*</code></label>
                        <input type="text" class="form-control @error('dom_rtrw') is-invalid @enderror" name="dom_rtrw"
                        value="{{ $member->dom_rtrw }}" readonly>
                        @error('dom_rtrw')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kelurahan / Desa') }}<code>*</code></label>
                        <input type="text" class="form-control @error('dom_kel') is-invalid @enderror" name="dom_kel"
                        value="{{ $member->dom_kel }}" readonly>
                        @error('dom_kel')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kecamatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('dom_kec') is-invalid @enderror" name="dom_kec"
                        value="{{ $member->dom_kec }}" readonly>
                        @error('dom_kec')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kabupaten / Kota') }}<code>*</code></label>
                        <input type="text" class="form-control @error('dom_kab') is-invalid @enderror" name="dom_kab"
                        value="{{ $member->dom_kab }}" readonly>
                        @error('dom_kab')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Provinsi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('dom_prov') is-invalid @enderror" name="dom_prov"
                        value="{{ $member->dom_prov }}" readonly>
                        @error('dom_prov')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label class="form-label">{{ __('Status Tempat Tinggal') }}</label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_tmpttgl" value="Hak Milik" class="selectgroup-input" {{ $member->stts_tmpttgl == 'Hak Milik' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Hak Milik') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_tmpttgl" value="Kontrak" class="selectgroup-input" {{ $member->stts_tmpttgl == 'Kontrak' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Kontrak') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_tmpttgl" value="Menumpang Wali" class="selectgroup-input" {{ $member->stts_tmpttgl == 'Menumpang Wali' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Menumpang Wali') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_tmpttgl" value="Rumah Dinas" class="selectgroup-input" {{ $member->stts_tmpttgl == 'Rumah Dinas' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Rumah Dinas') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_tmpttgl" value="Kos" class="selectgroup-input" {{ $member->stts_tmpttgl == 'Kos' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Kos') }}</span>
                            </label>
                        </div>
                        @error('stts_tmpttgl')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Lain - lain') }}</label>
                        <input type="text" class="form-control @error('stts_tmpttgl_lain') is-invalid @enderror"
                            name="stts_tmpttgl_lain" value="{{ $member->stts_tmpttgl_lain }}" readonly>
                        @error('stts_tmpttgl_lain')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label class="form-label">{{ __('Pendidikan Terakhir') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="MI" class="selectgroup-input" {{ $member->pend_terakhir == 'MI' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('MI') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="SD" class="selectgroup-input" {{ $member->pend_terakhir == 'SD' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('SD') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="SLTP" class="selectgroup-input" {{ $member->pend_terakhir == 'SLTP' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('SLTP') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="SLTA" class="selectgroup-input" {{ $member->pend_terakhir == 'SLTA' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('SLTA') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="D1 , D2" class="selectgroup-input" {{ $member->pend_terakhir == 'D1 , D2' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('D1 , D2') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_terakhir" value="S1 , S2" class="selectgroup-input" {{ $member->pend_terakhir == 'S1 , S2' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('S1 , S2') }}</span>
                            </label>
                        </div>
                        @error('pend_terakhir')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tahun Pendidikan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pend_terakhir_thn') is-invalid @enderror"
                            name="pend_terakhir_thn" value="{{ $member->pend_terakhir_thn }}" readonly>
                        @error('pend_terakhir_thn')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Pekerjaan / Usaha') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pkrjaan') is-invalid @enderror" name="pkrjaan"
                        value="{{ $member->pkrjaan }}" readonly>
                        @error('pkrjaan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Pendapatan Per Bulan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('gaji_perbulan') is-invalid @enderror"
                            name="gaji_perbulan" value="{{ $member->gaji_perbulan }}" readonly>
                        @error('gaji_perbulan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">{{ __('Jenis Permohonan') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_prmohn" value="Tabungan Sahabat Muslim" class="selectgroup-input" {{ $member->jns_prmohn == 'Tabungan Sahabat Muslim' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Tabungan Sahabat Muslim') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_prmohn" value="'Tabungan Idul Fitri" class="selectgroup-input" {{ $member->jns_prmohn == 'Tabungan Idul Fitri' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Tabungan Idul Fitri') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_prmohn" value="Tabungan Qurban" class="selectgroup-input" {{ $member->jns_prmohn == 'Tabungan Qurban' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Tabungan Qurban') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_prmohn" value="Tabungan Umroh" class="selectgroup-input" {{ $member->jns_prmohn == 'Tabungan Umroh' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Tabungan Umroh') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_prmohn" value="Tabungan Pendidikan" class="selectgroup-input" {{ $member->jns_prmohn == 'Tabungan Pendidikan' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Tabungan Pendidikan') }}</span>
                            </label>
                        </div>
                        @error('jns_prmohn')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nominal Tabungan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('nom_tab') is-invalid @enderror" name="nom_tab"
                        value="{{ $member->nom_tab }}" readonly>
                        @error('nom_tab')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label class="form-label">{{ __('Per') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="nom_tab_per" value="Per-Bulan" class="selectgroup-input" {{ $member->nom_tab_per == 'Per-Bulan' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Per-Bulan') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="nom_tab_per" value="Per-Minggu" class="selectgroup-input" {{ $member->nom_tab_per == 'Per-Minggu' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Per-Minggu') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="nom_tab_per" value="Per-Hari" class="selectgroup-input" {{ $member->nom_tab_per == 'Per-Hari' ? 'checked' : '' }}>
                                <span class="selectgroup-button">{{ __('Per-Hari') }}</span>
                            </label>
                        </div>
                        @error('nom_tab_per')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Terbilang') }}<code>*</code></label>
                        <input type="text" class="form-control @error('nom_tab_terbilang') is-invalid @enderror"
                            name="nom_tab_terbilang" value="{{ $member->nom_tab_terbilang }}" readonly>
                        @error('nom_tab_terbilang')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Keterangan Pembayaran Tabungan') }}</label>
                <textarea type="text" class="form-control @error('info') is-invalid @enderror" name="info" cols="150"
                    rows="10" style="height: 77px;" readonly>{{ $member->info }}</textarea>
                @error('info')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <!-- <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('pages.add') }}</button>
        </div> -->
    </form>
</div>


<!-- <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Nama Gedung') }}<code>*</code></label>
                    <input type="text" value="{{ $member->name }}" class="form-control" name="name" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Alamat') }}<code>*</code></label>
                    <input type="text" value="{{ $member->address }}" class="form-control" name="address" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('No PBB') }}<code>*</code></label>
                    <input type="text" value="{{ $member->pbb }}" class="form-control" name="pbb" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('No Token PLN') }}<code>*</code></label>
                    <input type="text" value="{{ $member->pln }}" class="form-control" name="pln" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('No PDAM') }}<code>*</code></label>
                    <input type="text" value="{{ $member->pdam }}" class="form-control" name="pdam" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('No Wifi') }}<code>*</code></label>
                    <input type="text" value="{{ $member->wifi }}" class="form-control" name="wifi" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-label">{{ __('Status Pembayaran') }}<code>*</code></label>
                    <div class="selectgroup w-100" id="status">
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input"
                                {{ $member->status == 'Lunas' ? 'checked' : 'disabled' }}>
                            <span class="selectgroup-button">{{ __('Lunas') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input"
                                {{ $member->status == 'Belum' ? 'checked' : 'disabled' }}>
                            <span class="selectgroup-button">{{ __('Belum Lunas') }}</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-label">{{ __('Status Gedung') }}<code>*</code></label>
                    <div class="selectgroup w-100" id="member">
                        <label class="selectgroup-item">
                            <input type="radio" name="member" value="1" class="selectgroup-input"
                                {{ $member->member == 'Sewa' ? 'checked' : 'disabled' }}>
                            <span class="selectgroup-button">{{ __('Sewa') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="member" value="2" class="selectgroup-input"
                                {{ $member->member == 'Hak Milik' ? 'checked' : 'disabled' }}>
                            <span class="selectgroup-button">{{ __('Hak Milik') }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Tanggal Jatuh Tempo') }}<code>*</code></label>
            <input value="{{ $member->due }}" type="date" class="form-control" name="due" readonly>
        </div>
        <div class="form-group">
            <label>{{ __('Keterangan') }}</label>
            <textarea type="text" class="form-control" name="info" cols="150" rows="10" style="height: 77px;" readonly>
                    {{ $member->info }}
                </textarea>
        </div>
    </div>
</div> -->
@endsection
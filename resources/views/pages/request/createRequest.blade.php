@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Permohonan'))
@section('titleContent', __('Tambah Permohonan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Permohonan Koperasi Syariah') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Permohonan') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ $code }}</h2>
<p class="section-lead">
    {{ __('ID yang digunakan untuk mengidentifikasi setiap Permohonan') }}
</p>
<div class="card">
    <form method="POST" action="{{ route('request.store') }}">
        @csrf
        <input type="hidden" value="{{ $code }}" name="code">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nama Lengkap Pemohon') }}<code>*</code></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                            autofocus>
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
                        <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" name="tmpt_lahir"
                            required>
                        @error('tmpt_lahir')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tanggal Lahir') }}<code>*</code></label>
                        <input type="text" class="form-control datepicker @error('due') is-invalid @enderror" name="due"
                            required>
                        @error('due')
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
                                <input type="radio" name="jns_klamin" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Pria') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jns_klamin" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Wanita') }}</span>
                            </label>
                        </div>
                        @error('jns_klamin')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No Telp / HP') }}<code>*</code></label>
                        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" required>
                        @error('no_tlp')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No Telp Orang Dekat') }}<code>*</code></label>
                        <input type="text" class="form-control @error('no_orgdkt') is-invalid @enderror" name="no_orgdkt" required>
                        @error('no_orgdkt')
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
                                <input type="radio" name="stts_kawin" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Belum Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_kawin" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_kawin" value="3" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Cerai Hidup') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_kawin" value="4" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Cerai Mati') }}</span>
                            </label>
                        </div>
                        @error('stts_kawin')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tahun Status') }}<code>*</code></label>
                        <input type="text" class="form-control @error('thn_kawin') is-invalid @enderror" name="thn_kawin" required>
                        @error('thn_kawin')
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
                            required>
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
                            required>
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
                        <input type="text" class="form-control @error('kel') is-invalid @enderror" name="kel"
                            required>
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
                        <input type="text" class="form-control @error('kec') is-invalid @enderror" name="kec"
                            required>
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
                        <input type="text" class="form-control @error('kab') is-invalid @enderror" name="kab"
                            required>
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
                        <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos"
                            required>
                        @error('kode_pos')
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
                            required>
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
                            required>
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
                            required>
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
                            required>
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
                            required>
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
                            required>
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
                            required>
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
                        <label class="form-label">{{ __('Status Tempat Tinggal') }}<code>*</code></label>
                        <div class="selectgroup w-100" id="status">
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_rmhtgl" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Hak Milik') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_rmhtgl" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Kontrak') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_rmhtgl" value="3" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Menumpang Wali') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_rmhtgl" value="4" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Rumah Dinas') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="stts_rmhtgl" value="5" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Kos') }}</span>
                            </label>
                        </div>
                        @error('stts_rmhtgl')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Lain - lain') }}</label>
                        <input type="text" class="form-control @error('rmhtgl_lain') is-invalid @enderror" name="rmhtgl_lain">
                        @error('rmhtgl_lain')
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
                                <input type="radio" name="pend_trakhir" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('MI') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_trakhir" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('SD') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_trakhir" value="3" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('SLTP') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_trakhir" value="4" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('SLTA') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_trakhir" value="5" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('D1 , D2') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="pend_trakhir" value="6" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('S1 , S2') }}</span>
                            </label>
                        </div>
                        @error('pend_trakhir')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Lain-lain') }}</label>
                        <input type="text" class="form-control @error('pend_lain') is-invalid @enderror" name="pend_lain">
                        @error('pend_lain')
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
                        <input type="text" class="form-control @error('pkerjaan') is-invalid @enderror" name="pkerjaan" required
                            autofocus>
                        @error('pkerjaan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Perusahaan / Instansi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('prusahaan') is-invalid @enderror" name="prusahaan"
                            required>
                        @error('prusahaan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Jabatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                            required>
                        @error('jabatan')
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
                        <label>{{ __('Alamat Perusahaan / Instansi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('almt_prshaan') is-invalid @enderror" name="almt_prshaan" required
                            autofocus>
                        @error('almt_prshaan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Ikut Bertanggung Jawab') }}<code>*</code></label>
                        <input type="text" class="form-control @error('ikut_tgjwb') is-invalid @enderror" name="ikut_tgjwb"
                            required>
                        @error('ikut_tgjwb')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Status Hubungan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('stts_hub') is-invalid @enderror" name="stts_hub"
                            required>
                        @error('stts_hub')
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
                        <label>{{ __('No Telp Perusahaan / Instansi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('no_prusahaan') is-invalid @enderror" name="no_prusahaan" required
                            autofocus>
                        @error('no_prusahaan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tanggungan Keluarga') }}<code>*</code></label>
                        <input type="text" class="form-control @error('tg_kluarga') is-invalid @enderror" name="tg_kluarga"
                            required>
                        @error('tg_kluarga')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Pendapatan Tetap / Rata') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pendapatan') is-invalid @enderror" name="pendapatan"
                            required>
                        @error('pendapatan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Keterangan Pendapatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('ket_pendapatan') is-invalid @enderror" name="ket_pendapatan"
                            required>
                        @error('ket_pendapatan')
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
                        <label>{{ __('Jumlah Pengajuan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('jml_pngajuan') is-invalid @enderror" name="jml_pngajuan" required
                            autofocus>
                        @error('jml_pngajuan')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Terbilang') }}<code>*</code></label>
                        <input type="text" class="form-control @error('terbilang') is-invalid @enderror" name="terbilang" required
                            autofocus>
                        @error('terbilang')
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
                        <label>{{ __('Jumlah yang disetujui') }}<code>*</code></label>
                        <input type="text" class="form-control @error('jml_disetujui') is-invalid @enderror" name="jml_disetujui" required
                            autofocus>
                        @error('jml_disetujui')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('') }}</label>
                        <input type="text" class="form-control @error('jml_disetujui2') is-invalid @enderror" name="jml_disetujui2" >
                        @error('jml_disetujui2')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('') }}</label>
                        <input type="text" class="form-control @error('jml_disetujui3') is-invalid @enderror" name="jml_disetujui3" >
                        @error('jml_disetujui3')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('') }}</label>
                        <input type="text" class="form-control @error('jml_disetujui4') is-invalid @enderror" name="jml_disetujui4" >
                        @error('jml_disetujui4')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Untuk Keperluan') }}</label>
                <textarea type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" cols="150"
                    rows="10" style="height: 77px;"></textarea>
                @error('keperluan')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Jangka Waktu') }}<code>*</code></label>
                        <input type="text" class="form-control @error('jngka_wkt') is-invalid @enderror" name="jngka_wkt" required
                            autofocus>
                        @error('jngka_wkt')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Akad Pembiayaan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('akad_pemb') is-invalid @enderror" name="akad_pemb"
                            required>
                        @error('akad_pemb')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Keterangan Akad') }}</label>
                <textarea type="text" class="form-control @error('info') is-invalid @enderror" name="info" cols="150"
                    rows="10" style="height: 77px;"></textarea>
                @error('info')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('pages.add') }}</button>
        </div>
    </form>
</div>
@endsection
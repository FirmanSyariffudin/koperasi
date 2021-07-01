@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Anggota'))
@section('titleContent', __('Tambah Anggota'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Anggota Koperasi Syariah') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Anggota') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ $code }}</h2>
<p class="section-lead">
    {{ __('ID yang digunakan untuk mengidentifikasi setiap Anggota') }}
</p>
<div class="card">
    <form method="POST" action="{{ route('rental.store') }}">
        @csrf
        <input type="hidden" value="{{ $code }}" name="code">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nama Lengkap') }}<code>*</code></label>
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
                                <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Pria') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Wanita') }}</span>
                            </label>
                        </div>
                        @error('status')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No KTP/SIM') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pbb') is-invalid @enderror" name="pbb" required>
                        @error('pbb')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Berlaku KTP/SIM s/d') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pln') is-invalid @enderror" name="pln" required>
                        @error('pln')
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
                        <input type="text" class="form-control @error('pdam') is-invalid @enderror" name="pdam"
                            required>
                        @error('pdam')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Nama Ibu Kandung') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('No Telp / HP') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
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
                                <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Belum Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Nikah') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                                <span class="selectgroup-button">{{ __('Cerai Hidup') }}</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="2" class="selectgroup-input">
                                <span class="selectgroup-button">{{ __('Cerai Mati') }}</span>
                            </label>
                        </div>
                        @error('status')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Tahun Status') }}<code>*</code></label>
                        <input type="text" class="form-control @error('pbb') is-invalid @enderror" name="pbb" required>
                        @error('pbb')
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
                        <input type="text" class="form-control @error('pdam') is-invalid @enderror" name="pdam"
                            required>
                        @error('pdam')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('RT / RW') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
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
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kecamatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kabupaten / Kota') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kode Pos') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Provinsi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
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
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('RT / RW') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
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
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kecamatan') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Kabupaten / Kota') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
                        <span class="text-danger" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('Provinsi') }}<code>*</code></label>
                        <input type="text" class="form-control @error('wifi') is-invalid @enderror" name="wifi"
                            required>
                        @error('wifi')
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
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Hak Milik') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('Kontrak') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Menumpang Wali') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('Rumah Dinas') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Kos') }}</span>
                        </label>
                    </div>
                    @error('status')
                    <span class="text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Lain - lain') }}<code>*</code></label>
                    <input type="text" class="form-control @error('pbb') is-invalid @enderror" name="pbb" required>
                    @error('pbb')
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
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('MI') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('SD') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('SLTP') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('SLTA') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('D1 , D2') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('S1 , S2') }}</span>
                        </label>
                    </div>
                    @error('status')
                    <span class="text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Tahun Pendidikan') }}<code>*</code></label>
                    <input type="text" class="form-control @error('pbb') is-invalid @enderror" name="pbb" required>
                    @error('pbb')
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
                    <label>{{ __('Pendapatan Per Bulan') }}<code>*</code></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        required>
                    @error('address')
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
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Tabungan Sahabat Muslim') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('Tabungan Idul Fitri') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Tabungan Qurban') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('Tabungan Umroh') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Tabungan Pendidikan') }}</span>
                        </label>
                    </div>
                    @error('status')
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
                    <input type="text" class="form-control @error('pbb') is-invalid @enderror" name="pbb" required>
                    @error('pbb')
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
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Per-Bulan') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="2" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('Per-Minggu') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Per-Hari') }}</span>
                        </label>
                    </div>
                    @error('status')
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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                        autofocus>
                    @error('name')
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
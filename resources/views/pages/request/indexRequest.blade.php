@extends('layouts.default')
@section('title', __('pages.title').__(' | Data Permohonan'))
@section('titleContent', __('Permohonan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Permohonan') }}</div>
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <a href="{{ route('request.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Permohonan') }}</a>
    </div>
    <div class="card-body">
        <table class="table-striped table" id="tables" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th class="text-center">
                        {{ __('Kode') }}
                    </th>
                    <th>{{ __('Nama Pemohon') }}</th>
                    <th>{{ __('Tempat Lahir') }}</th>
                    <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Pekerjaan') }}</th>
                    <th>{{ __('Jumlah Pengajuan') }}</th>
                    <th>{{ __('Keperluan') }}</th>
                    <th>{{ __('Keterangan') }}</th>
                    <th>{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($request as $number => $r)
                <tr>
                    <td class="text-center">
                        {{ $number+1 }}
                    </td>
                    <td class="text-center">
                        {{ $r->code }}
                    </td>
                    <td>
                        {{ $r->name }}
                    </td>
                    <td>
                        {{ $r->tmpt_lahir }}
                    </td>
                    <!-- <td>
                        {{ date("m-Y", strtotime($r->date_acq)) }}
                    </td> -->
                    <td>
                        {{ $r->address }}
                    </td>
                    <td>
                        {{ $r->pkerjaan }}
                    </td>
                    <td>
                        {{ $r->jml_pngajuan }}
                    </td>
                    <td>
                        {{ $r->keperluan }}
                    </td>
                    <td>
                        {{ $r->info }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('request.show',$r->id) }}" class="btn btn-primary">{{ __('Lihat') }}</a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                                <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="{{ route('request.edit',$r->id) }}">{{ __('pages.editItem') }}</a>
                                <form id="del-data{{ $r->id }}" action="{{ route('request.destroy',$r->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a class="dropdown-item" style="cursor: pointer"
                                        data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                        data-confirm-yes="document.getElementById('del-data{{ $r->id }}').submit();">
                                        {{ __('pages.delItem') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
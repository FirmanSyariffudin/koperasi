@extends('layouts.default')
@section('title', __('pages.title').__(' | Data Anggota'))
@section('titleContent', __('Daftar Anggota Koperasi Syariah'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Anggota Koperasi Syariah') }}</div>
@endsection

@section('content')

<div class="card mt-3">
    <div class="card-header">
        <a href="{{ route('member.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Anggota') }}</a>
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
                    <th>{{ __('Nama Gedung') }}</th>
                    <th>{{ __('Pembayaran') }}</th>
                    <th>{{ __('Status Gedung') }}</th>
                    <th>{{ __('Jatuh Tempo') }}</th>
                    <th>{{ __('No PBB') }}</th>
                    <th>{{ __('No PLN') }}</th>
                    <th>{{ __('No PDAM') }}</th>
                    <th>{{ __('No Wifi') }}</th>
                    <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Info') }}</th>
                    @isset($notUser)
                    <th>{{ __('Aksi') }}</th>
                    @endisset
                </tr>
            </thead>
            <tbody>
                @foreach($member as $number => $m)
                <tr>
                    <td class="text-center">
                        {{ $number+1 }}
                    </td>
                    <td class="text-center">
                        {{ $m->code }}
                    </td>
                    <td>
                        {{ $m->name }}
                    </td>
                    <td>
                        <span class="badge badge-info">
                            {{ $m->status }}
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-info">
                            {{ $m->rental }}
                        </span>
                    </td>
                    <td>
                        {{ date("m-Y", strtotime($m->due)) }}
                    </td>
                    <td>
                        {{ $m->pbb }}
                    </td>
                    <td>
                        {{ $m->pln }}
                    </td>
                    <td>
                        {{ $m->pdam }}
                    </td>
                    <td>
                        {{ $m->wifi }}
                    </td>
                    <td>
                        {{ $m->address }}
                    </td>
                    <td>
                        {{ $m->info }}
                    </td>
                    @isset($notUser)
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('rental.show',$m->id) }}" class="btn btn-primary">{{ __('Lihat') }}</a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                                <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="{{ route('rental.edit',$m->id) }}">{{ __('pages.editItem') }}</a>
                                <form id="del-data{{ $m->id }}" action="{{ route('rental.destroy',$m->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a class="dropdown-item" style="cursor: pointer"
                                        data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                        data-confirm-yes="document.getElementById('del-data{{ $m->id }}').submit();">
                                        {{ __('pages.delItem') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </td>
                    @endisset
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
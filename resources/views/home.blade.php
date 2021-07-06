@extends('layouts.default')
@section('title', __('pages.title').__(' | Dashboard'))
@section('titleContent', __('Dashboard'))
@section('breadcrumb', __('Tanggal ').date('d-M-Y'))

@section('content')
@if(Session::has('status'))
<div class="alert alert-danger alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ __('Informasi') }}</div>
        {{ Session::get('status') }}
    </div>
</div>
@endif
<div class="row">
    <div class="col">
        <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>{{ __('Total Anggota') }}</h4>
                </div>
                <div class="card-body">
                    {{ $member }}
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-folder"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>{{ __('Total Permohonan') }}</h4>
                </div>
                <div class="card-body">
                    {{ $request }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
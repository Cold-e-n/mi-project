@extends('layouts.app')

@section('title', 'Detail Benang Warna')

@section('page-title', 'Detail Benang Warna')

@section('page-content')
<div class="card" id="tabel-warna" style="font-family: 'Consolas';">
    <div class="card-body">
        <h3>{{ $warna->toString() }}</h3>
    </div>
</div>
@endsection

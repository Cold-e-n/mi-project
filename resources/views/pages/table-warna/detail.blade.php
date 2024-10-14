@extends('layouts.app')

@section('title', 'Detail Benang Warna')

@section('page-title', 'Detail Benang Warna')

@section('page-content')
<div class="card" id="tabel-warna" style="font-family: 'Consolas';">
    <div class="card-body">
        <h4>{{ $warna->get('type') }}</h4>

        <div class="row mt-5">
            @foreach ($denahWarna->tampil() as $key => $item)

            {{-- @if ($loop->iteration % 16 == 0)
            <div class="w-100 mt-5"></div>
            @endif --}}

            <div class="col">
                <div class="row">
                    <div class="col-12 text-right pb-5 border-right">{{ $item }}</div>
                    <div class="col-12 text-center">L{{ $key }}</div>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>
@endsection

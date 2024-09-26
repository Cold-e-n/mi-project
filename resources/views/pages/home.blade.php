@extends('layouts.app')

@section('title', 'Home')

@section('page-title', 'Home')

@section('page-content')

<div class="row">

    <div class="col-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h4 class="text-primary">Posisi Benang Warna Terbaru</h4>
            </div>

            <div class="card-body">
                <div class="list-group">
                @foreach ($posisiWarna->get() as $item)
                    <a href="{{ route('posisi-warna.detail', $item) }}" class="list-group-item list-group-item-action">{{ $kain->find($item->fabric_id)->name }}</a>
                @endforeach

                </div>

            </div>

            <div class="card-footer text-right">
                <a href="{{ route('posisi-warna.index') }}" class="btn btn-primary">Lihat semua</a>
            </div>

        </div>
    </div>

</div>
@endsection

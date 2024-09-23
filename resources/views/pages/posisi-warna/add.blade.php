@extends('layouts.app')

@section('title', 'Tambah Posisi Benang Warna')

@section('page-title','Tambah Posisi Benang Warna')

@push('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/stisla/modules/selectric/public/selectric.css') }}" />
@endpush

@section('page-content')
<div class="card">

    <div class="card-header">
        <h4 class="text-primary">Semua field harus diisi.</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('posisi-warna.store') }}" class="mb-3" id="form-tambah-posisi-warna" method="post">
            @csrf

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="no-wb">No. WB</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" id="no-wb" name="no-wb" type="text" />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="kain-select">Kain</label>
                </div>

                <div class="col-md-6">
                    <select class="form-control selectric" name="kain-select">
                        @foreach ($kain->orderBy('name', 'ASC')->get() as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="warna-select">Warna</label>
                </div>

                <div class="col-md-6">
                    <select class="form-control selectric" name="warna-select">
                        @foreach ($kain->orderBy('name', 'ASC')->get() as $item)
                        <option value="{{ $item->colour->id }}">{{ $item->colour->toString() }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="no-sisir">No. Sisir</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" id="no-sisir" name="no-sisir" placeholder="#" type="text" />
                </div>
            </div>

            <div class="form-group row" id="row-cones-seksi">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="cones-seksi">Jumlah cones x seksi</label>
                </div>

                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-3">
                            <input class="form-control" id="cones" name="cones" placeholder="Cones" type="text" />
                        </div>

                        <div class="col-md-1 text-md-center">
                            <label class="col-form-label control-label">x</label>
                        </div>

                        <div class="col-md-3">
                            <input class="form-control" id="seksi" name="seksi" placeholder="Seksi" type="number" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label"></label>
                </div>

                <div class="col">
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </div>
            </div>

        </form>

    </div><!--/.card-body -->
</div><!--/.card -->
@endsection

@push('scripts')
<script src="{{ asset('assets/stisla/modules/selectric/public/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/stisla/js/page/posisi-warna/add.js') }}"></script>
@endpush

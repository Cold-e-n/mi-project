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
                    <label class="col-form-label control-label" for="wb_no">No. WB</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control @error('wb_no') is-invalid @enderror" id="wb_no" name="wb_no" type="text" value="{{ old('wb_no') }}" />

                    @error('wb_no')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="fabric_id">Kain</label>
                </div>

                <div class="col-md-6">
                    <select class="form-control selectric" name="fabric_id">
                        @foreach ($kain->orderBy('name', 'ASC')->get() as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="colour_id">Warna</label>
                </div>

                <div class="col-md-6">
                    <select class="form-control selectric" name="colour_id">
                        @foreach ($kain->orderBy('name', 'ASC')->get() as $item)
                        <option value="{{ $item->colour->id }}">{{ $item->colour->toString() }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="sisir">No. Sisir</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control @error('sisir') is-invalid @enderror" id="sisir" name="sisir" placeholder="#" type="text" value="{{ old('sisir') }}" />

                    @error('sisir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row" id="row-cones-seksi">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="cones-seksi">Jumlah cones x seksi</label>
                </div>

                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-3">
                            <input class="form-control @error('cones') is-invalid @enderror" id="cones" name="cones" placeholder="Cones" type="text" value="{{ old('cones') }}" />

                            @error('cones')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-1 text-md-center">
                            <label class="col-form-label control-label">x</label>
                        </div>

                        <div class="col-md-3">
                            <input class="form-control @error('seksi') is-invalid @enderror" id="seksi" name="seksi" placeholder="Seksi" type="number" value="{{ old('seksi') }}" />

                            @error('seksi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
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

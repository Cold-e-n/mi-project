@extends('layouts.app')

@section('title', 'Edit Posisi Benang Warna')

@section('page-title','Edit Posisi Benang Warna')

@push('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/stisla/modules/selectric/public/selectric.css') }}" />
@endpush

@section('page-content')
<div class="card">

    <div class="card-header">
        <h4>Semua field harus diisi.</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('posisi-warna.update', $posisiWarna) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="wb_no">No. WB</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" id="wb_no" name="wb_no" type="text" value="{{ $posisiWarna->wb_no }}" />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="fabric_id">Kain</label>
                </div>

                <div class="col-md-6">
                    <select class="form-control selectric" name="fabric_id">
                        @foreach ($kain->orderBy('name', 'ASC')->get() as $item)
                        <option value="{{ $item->id }}" @if ($posisiWarna->fabric_id == $item->id) selected @endif>{{ $item->name }}</option>
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
                        <option value="{{ $item->colour->id }}" @if ($posisiWarna->fabric_id == $item->colour->id) selected @endif>{{ $item->colour->toString() }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="sisir">No. Sisir</label>
                </div>

                <div class="col-md-6">
                    <input class="form-control" id="sisir" name="sisir" placeholder="#" type="text" value="{{ $posisiWarna->sisir }}" />
                </div>
            </div>

            <div class="form-group row" id="row-cones-seksi">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label" for="cones-seksi">Jumlah cones x seksi</label>
                </div>

                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-3">
                            <input class="form-control" id="cones" name="cones" placeholder="Cones" type="text" value="{{ $posisiWarna->cones }}"/>
                        </div>

                        <div class="col-md-1 text-md-center">
                            <label class="col-form-label control-label">x</label>
                        </div>

                        <div class="col-md-3">
                            <input class="form-control" id="seksi" name="seksi" placeholder="Seksi" type="number" value="{{ $posisiWarna->seksi }}" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3 text-md-right">
                    <label class="col-form-label control-label"></label>
                </div>

                <div class="col">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>

        </form>

    </div><!--/.card-body -->
</div><!--/.card -->
@endsection

@push('scripts')
<script src="{{ asset('assets/stisla/modules/selectric/public/jquery.selectric.min.js') }}"></script>
@endpush

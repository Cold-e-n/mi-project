@extends('layouts.app')

@section('title', 'Posisi Benang Warna')

@section('page-title','Posisi Benang Warna')

@push('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/stisla/modules/sweetalert2/dist/sweetalert2.css') }}" />
@endpush

@section('page-content')

@if (Session::has('success_message'))
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>

        <i class="fas fa-check"></i> {{ session('success_message') }}
    </div>
</div>
@endif

<p>
    <a href="{{ route('posisi-warna.add') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
</p>

<div class="card" id="posisi-warna" style="font-family: 'Consolas';">

    <div class="card-body">

        <div class="table-responsive">
            <table class="table-striped table-md table">

                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Kain</th>
                        <th>No WB</th>
                        <th></th>
                    </tr>

                    @foreach ($posisiWarna as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kain->find($item->fabric_id)->name }}</td>
                        <td>{{ $item->wb_no }}</td>
                        <td>
                            <a href="{{ route('posisi-warna.detail', $item) }}" class="btn btn-icon btn-primary"><i class="fas fa-search"></i></a>
                            <a href="{{ route('posisi-warna.edit', $item) }}" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('posisi-warna.delete', $item) }}" class="btn btn-icon btn-danger" id="btn-hapus-item"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div><!--/.card-body -->
</div><!--/.card -->
@endsection

@push('scripts')
<script src="{{ asset('assets/stisla/modules/sweetalert2/dist/sweetalert2.all.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/stisla/js/page/posisi-warna/index.js') }}" type="text/javascript"></script>
@endpush

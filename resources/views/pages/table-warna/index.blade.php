@extends('layouts.app')

@section('title', 'Tabel Benang Warna')

@section('page-title','Tabel Benang Warna')

@section('page-content')
<div class="card" id="tabel-warna" style="font-family: 'Consolas';">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table-striped table-md table">

                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Tipe Warna</th>
                        <th>Jarak Warna</th>
                        <th>No. Sisir</th>
                        <th></th>
                    </tr>

                    @foreach ($warna as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->get('type') }}</td>
                        <td>{{ $item->get('distance') }} H</td>
                        <td>{{ $item->comb }}</td>
                        <td>
                            <a href="{{ route('table-warna.detail', $item) }}" class="btn btn-icon btn-primary"><i class="fas fa-search"></i></a>
                            <a href="" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-icon btn-danger" id="btn-hapus-item"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div><!--/.card-body -->
</div><!--/.card -->
@endsection

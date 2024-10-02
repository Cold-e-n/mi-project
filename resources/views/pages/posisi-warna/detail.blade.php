@extends('layouts.app')

@section('title', 'Posisi Benang Warna: '.$kain->name)

@section('page-title', 'Posisi Benang Warna: '.$kain->name)

@section('page-content')
<p>
    <a href="{{route('posisi-warna.index')}}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
</p>

<div class="card card-default" id="posisi-warna" style="font-family: 'Consolas';">
    <div class="card-body">

        <div class="row mb-5">
            <div class="col">

                <div class="row">
                    <div class="col-12 text-danger">WB - {{ $posisiWarna->wb_no}}</div>
                    <div class="col-12">{{ $kain->name }}</div>
                    <div class="col-12">{{ $posisiWarna->cones }} Cones x {{ $posisiWarna->seksi }} = {{ $posisiWarna->cones * $posisiWarna->seksi }} Helai</div>
                    <div class="col-12">{{ $kain->colour->toString() }}</div>
                </div>

            </div>

            <div class="col">
                <div class="col-12">Jarak Warna: {{ json_decode($kain->colour->type, true)['distance'] }}</div>
                <div class="col-12">No. Sisir: {{ ($posisiWarna->sisir) }}</div>
            </div>
        </div>


        <div class="row text-center">
            @foreach($perhitunganWarna->hitung() as $keys => $values)

            @if ($loop->iteration % 7 == 0)
            <div class="w-100 mt-5"></div>
            @endif

            <div class="col @if (($keys) != $posisiWarna->seksi) border-right @endif">

                <div class="row">
                    <div class="col-12 mb-5">{{ $loop->iteration }}</div>

                    <div class="col-12 pb-2 border-bottom">

                        <div class="row">
                            @foreach ($values as $item)
                            <div class="col">{{ $item }}</div>

                            @if ($item != end($values))
                            <div class="col-xs"><i class="fa fa-long-arrow-alt-down"></i></div>
                            @endif

                            @endforeach
                        </div>

                    </div>

                    <div class="col-12 pt-2 mb-5">

                        <div class="row">
                            <div class="col">x</div>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div> <!-- /.card-body -->
</div>
@endsection

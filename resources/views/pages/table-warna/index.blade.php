@extends('layouts.app')

@section('title', 'Tabel Benang Warna')

@section('page-title','Tabel Benang Warna')

@section('page-content')
<div class="main-content">
    <section class="section">

        <div class="section-header">
            <h1>@yield('page-title')</h1>
        </div>

        <div class="section-body">

            <div class="card" id="posisi-warna" style="font-family: 'Consolas';">

                <div class="card-body">

                    <div class="list-group">
                        @foreach ($kain as $item)
                        <a href="{{route('table-warna.detail', $item)}}" class="list-group-item list-group-item-action">{{$item->name}}</a>
                        @endforeach
                    </div>

                </div><!--/.card-body -->
            </div><!--/.card -->

        </div>

    </section>
</div>
@endsection

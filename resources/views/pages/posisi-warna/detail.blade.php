@extends('layouts.app')

@section('title', 'Posisi Benang Warna: '.$kain->name)

@section('page-title', 'Posisi Benang Warna: '.$kain->name)

@section('page-content')
<div class="row mb-3">
    <div class="col-md-4">
        <a href="{{ route('posisi-warna.index') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>

    <div class="col-md-4 offset-md-4">
        <button class="btn btn-primary" id="btn-print" title="Print" type="button"><i class="fa fa-print"></i></button>
    </div>
</div>

@include('pages.posisi-warna.layout')
@endsection

@push('scripts')
<script type="text/javascript">
"use strict"

$(document).ready(() => {
    const btnPrint = $("#btn-print");

    btnPrint.click(() => {
        window.print()
    })
})
</script>
@endpush

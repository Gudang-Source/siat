@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4><b>Selamat Datang, {{ Auth::user()->name }}</b></h4>
    <button type="button" class="btn btn-outline-success"><b>{{$cabang->nama_cabang}}</b></button>

    <div class="row pt-4">

        <div class="col-8">
            <h5><b>Ringkasan Informasi Apotek</b></h5>
            <h5>Penjualan Apotek</h5>

        </div>

        <div class="col-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Absensi Karyawan</b></h5>
                                <p class="card-text">Fitur ini digunakan untuk tanda absensi karyawan. Karyawan harus melakukan absensi sebelum bekerja.</p>
                                <a href="{{ route('absensikaryawan') }}" class="btn btn-success">Absen Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
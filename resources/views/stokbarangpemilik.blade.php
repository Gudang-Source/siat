@extends('layouts.navpemilik')
@section('content')
<div class="container">
    <h4><b>Stok Barang Apotek</b></h4>
    <button type="button" class="btn btn-outline-success mb-2"><b>Apotek Karya Sehat {{$cabang->nama_cabang}}</b></button>
    <h5><b>{{$cabang->alamat_cabang}}</b></h5>
    <div class="row pt-3">
        <div class="col-sm-2 pt-1">
            <h5>Cari Barang</h5>
        </div>
        <div class="col-sm-5">
            <form class="form-inline md-form mr-auto mb-4" method="get" action="{{route('pencarianobatpemilik', ['id_cabang' => $cabang->id_cabang]) }}">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Kode atau Nama Barang" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <tr>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Satuan Obat</th>
                <th scope="col">Harga Obat</th>
                </tr>
            </thead>
            <tbody>

            @foreach($dataobat as $obat)
            <tr>
                <td>{{$obat->kodebarang}}</td>
                <td>{{$obat->keteranganbarang}}</td>
                <td>{{$obat->jenisbarang}}</td>
                <td>{{$obat->jumlahbarang}}</td>
                <td>{{$obat->tanggalmasuk}}</td>
                <td>{{$obat->tanggalexpired}}</td>
                <td>{{$obat->satuanbarang}}</td>
                <td>{{$obat->hargabarang}}</td>
                </tr>
                @endforeach
            </tbody>
            @if(!empty($errorMsg))
                <div class="alert alert-danger"> {{ $errorMsg }}</div>
            @endif
        </table>
    </div>
</div>
@endsection

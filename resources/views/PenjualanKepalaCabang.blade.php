@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Laporan Transaksi Penjualan</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek Karya Sehat {{$cabang->nama_cabang}}</b></button>
    <div class="row pt-3">
        <div class="col-sm">
            <h5>Filter Transaksi Penjualan</h5>
        <form>

          <div class="form-group row">
            <div class="col-md-2">
            <span>Tanggal Awal</span>
            @if(isset($awal))
              <input class="form-control" type="text" id="awal" name="awal" value="{{$awal}}" placeholder="yyyy-mm-dd" required>
            @else
            <input class="form-control" type="text" id="awal" name="awal"  placeholder="yyyy-mm-dd" required>
            
            @endif  
            </div>
            <div class="col-md-2">
            <span>Tanggal Akhir</span>
            @if(isset($akhir))
              <input class="form-control" type="text" id="akhir" name="akhir" value="{{$akhir}}"  placeholder="yyyy-mm-dd" required>
              @else
            <input class="form-control" type="text" id="akhir" name="akhir"  placeholder="yyyy-mm-dd" required>
            @endif  
            </div>
          </div>
        </form>
        <script>
              $(document).ready(function () {
                $('#awal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
                $('#akhir').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
        <div class="col-xs-12 mb-2">
          <button type="button" id="lihatbutton" class="btn btn-outline-success" onclick="ontambahclicked();">Lihat</button>
          <input type="submit" onclick="onclicked();" class="btn btn-success" value="Cetak Laporan Penjualan"></a>
        </div>
        </div>
        <div class="row float-right">
        <script>
          function onclicked(){
          
            var awal = $("#awal").val();
             var akhir = $("#akhir").val();
             window.location.replace("/dashboard/kepala/penjualan/cetaklaporan/" + awal + "/" + akhir);
          }
        </script>
  </div>
        <script>
             function ontambahclicked()  {
              var awal = $("#awal").val();
             var akhir = $("#akhir").val();
             window.location.replace("/dashboard/kepala/penjualan/" + awal + "/" + akhir);
           
     };
        </script>
    </div>

    <div class="row justify-content-center">
    <table class="table table-striped table-hover table-hover" id="tabeltransaksi">
            <thead>
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">JenisPasien</th>
                <th scope="col">NamaDokter</th>
                <th scope="col">KodeBarang</th>
                <th scope="col">JumlahBarang</th>
                <th scope="col">TotalBiaya</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $trans)
                <tr>
                    <td>{{$trans->tanggal}}</td>
                    <td>{{$trans->jenispasien}}</td>
                    <td>{{$trans->namadokter}}</td>
                    <td>{{$trans->kodebarang}}</td>
                    <td>{{$trans->jumlahbarang}}</td>
                    <td>{{$trans->totalbiaya}}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
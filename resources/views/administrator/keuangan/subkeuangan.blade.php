@extends('layout.page')

@section('sidebar')
    @component('components.adminSidebar')
    @endcomponent
@endsection

@section('tab-title', 'Detail Keuangan')

@section('page-title')
<x-title heading="Detail Keuangan" subheading="Detail Keuangan" url="/admin" />
@endsection

@section('page-content')
<section class="section">
    <div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
            <div class="card-header">
            <h3 class="text-center">Daftar Pemasukan</h3>
            <p class="text-center h5">{{(isset($_GET['tahun'])) ? 'Tahun '.$_GET['tahun'] : '' }}</p>
            </div>
            <div class="card-body">
                <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="justify-content-start">
                    <a class="btn btn-outline-primary btn-sm" href="{{url('admin/lapkeu')}}">Kembali</a>
                        </div>
                    </div>
                    <div class="col">
                    <div class="row justify-content-end">
                    <div class="col-md-2 me-3 btn-group mb-1">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle me-1" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Bulan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item bulan" value="01">Januari</button>
                            <button class="dropdown-item bulan" value="02">Februari</button>
                            <button class="dropdown-item bulan" value="03">Maret</button>
                            <button class="dropdown-item bulan" value="04">April</button>
                            <button class="dropdown-item bulan" value="05">Mei</button>
                            <button class="dropdown-item bulan" value="06">Juni</button>
                            <button class="dropdown-item bulan" value="07">Juli</button>
                            <button class="dropdown-item bulan" value="08">Agustus</button>
                            <button class="dropdown-item bulan" value="09">September</button>
                            <button class="dropdown-item bulan" value="10">Oktober</button>
                            <button class="dropdown-item bulan" value="11">November</button>
                            <button class="dropdown-item bulan" value="12">Desember</button>
                        </div>
                        </div>
                   </div>

                    <div class="col-md-2 btn-group mb-1">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle me-1" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Tahun
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($year as $each)
                            <button class="dropdown-item tahun" value="{{$each}}">{{$each}}</button>
                            @endforeach
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

                <table class="table table-striped">
                <thead>
                    <th>Hash</th>
                    <th>Mapel</th>
                    <th>Biaya</th>
                    <th>Siswa</th>
                    <th>Tentor</th>
                    <th>Status Bayar</th>
                    <th>Tanggal Dilaporkan</th>
                    <th>Tanggal Melaporkan</th>
                </thead>
                <tbody>
                    @foreach($reports as $each)
                        <tr>
                            <td>{{$each->hash}}</td>
                            <td>{{$each->mapel}}</td>
                            <td>{{number_format($each->biaya,0,",",".")}}</td>
                            <td class="text-wrap">{{$each->student->name}}</td>
                            <td class="text-wrap">{{$each->name_tentors}}</td>
                            <td>{{$each->status_bayar}}</td>
                            <td>{{$each->date_exec}}</td>
                            <td>{{$each->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($reports) !== 0)
            <div class="card-footer">
                <div class="div container">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-primary justify-content-center">
                            {{$reports->appends($_GET)->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
            @endif
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section('header-custom')
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection

@section('footer-custom')
<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    // let table1 = document.querySelector('#siswatable');
    // let dataTable = new simpleDatatables.DataTable(table1);

    $(document).ready(() => {

        $('.tahun').on('click', function(){
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.set("tahun", $(this).val());
            window.location.search = searchParams.toString();
        })
        $('.bulan').on('click', function(){
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.set("bulan", $(this).val());
            window.location.search = searchParams.toString();
        })
    })
</script>
@endsection

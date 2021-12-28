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
            <h3 class="text-center">Daftar Siswa</h3>
            </div>
            <div class="card-body">
                <div class="container">
                <div class="row justify-content-start">
                    <a class="btn btn-outline-primary btn-sm col-md-2 " href="{{url('admin/lapkeu')}}">Kembali</a>
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
                            <td>{{$each->biaya}}</td>
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
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-primary justify-content-center">
                        {{$reports->links()}}
                    </ul>
                </nav>
            </div>
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
    let table1 = document.querySelector('#siswatable');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection

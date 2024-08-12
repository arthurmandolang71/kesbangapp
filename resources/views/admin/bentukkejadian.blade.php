@extends('template.main')

@section('header')
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css">
    {{-- <meta http-equiv="refresh" content="60"> --}}
@endSection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="#">Data</a></li>
                    <li class="breadcrumb-item"><a href="">Laporan Bentuk Kejadian</a>
                    </li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        @if (session()->has('pesan'))
                            <div class="container text-center">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ session('pesan') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif

                        <!--********************************** content start ***********************************-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pemberi Info</th>
                                            <th>Judul</th>
                                            <th>Katagori</th>
                                            <th>Sifat</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bentukkejadian as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->pemberiinfo_ref->nama ?? null }}</td>
                                                <td>{{ $item->judul ?? null }}</td>
                                                <td>{{ $item->katagori ?? null }}</td>
                                                <td>{{ $item->sifat ?? null }}</td>
                                                <td> <a href="/admin/bentukkejadian/{{ $item->id }}"> <span
                                                            class="badge badge-lg light badge-success">Detail</span> </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pemberi Info</th>
                                            <th>Judul</th>
                                            <th>Katagori</th>
                                            <th>Sifat</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!--********************************** content end ***********************************-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection



@section('footer')
    <!-- Datatable -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>

    <script></script>
@endSection

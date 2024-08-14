@extends('template.main')

@section('header')
    <!-- Material color picker -->
    <link href="{{ asset('') }}assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/pickadate/themes/default.date.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endSection


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/independen/">Bentuk Kejadian</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Detail</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        <div class="row">
                            <div class="col">
                                <a href="/admin/bentukkejadian/" class="btn btn-block btn-primary"><span
                                        class="btn-icon-start text-primary"><i class="bi bi-backspace-fill"></i>
                                    </span>Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('pesan'))
                                <div class="container text-center">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        {{ session('pesan') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                            @endif
                            <div class="alert alert-danger" role="alert">
                                ini merupakan detail bentuk kejadian yang di leporkan oleh stakeholder pemberi infomrasi
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">Laporan dari
                                                {{ $bentukkejadian->pemberiinfo_ref->nama }}
                                                Bersifat {{ $bentukkejadian->sifat }}, Katagori
                                                {{ $bentukkejadian->katagori }}
                                            </h4>
                                            <h4 class="pt-3">Judul : <b>{{ $bentukkejadian->judul }}</b></h4>
                                            <h4 class="pt-3">Oknum (Siapa ?) : <b>{{ $bentukkejadian->oknum }}</b></h4>
                                            <h4 class="pt-3">Bagaiaman Kejadian berlangsung :
                                                <b>{{ $bentukkejadian->bagaimana }}</b>
                                            </h4>
                                            <h4 class="pt-3">Mengapa Kejadian berlangsung :
                                                <b>{{ $bentukkejadian->mengapa }}</b>
                                            </h4>
                                            <h4 class="pt-3">Lokasi Kejadian :
                                                <b>{{ $bentukkejadian->lokasi }}</b>
                                            </h4>
                                            <h4 class="pt-3">Waktu Kejadian :
                                                <b>{{ $bentukkejadian->waktu }}</b>
                                            </h4>
                                            <h4 class="pt-3">Nama CP :
                                                <b>{{ $bentukkejadian->nama_kontak }}</b>
                                            </h4>
                                            <h4 class="pt-3">Nomor CP :
                                                <b>{{ $bentukkejadian->no_kontak }}</b>
                                            </h4>
                                            @php
                                                $idbentukkejadian = $bentukkejadian->id;
                                                $link = "p3kforkompinda-pim.manadokota.go.id/bentukkejadiantl/$idbentukkejadian";
                                            @endphp
                                            <a href="https://wa.me/6285342508250?text=Ada Laporan dari {{ $bentukkejadian->pemberiinfo_ref->nama }} tentang {{ $bentukkejadian->judul }}. untuk tindak lanjut laporan bisa dilakukan lewat link {{ $link }}"
                                                target="_blank" class="btn btn-danger"><i class="bi bi-whatsapp"></i>
                                                Teruskan Ke Forkompinda
                                                ?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            @foreach ($tindaklanjut as $item)
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="profile-details">
                                            <div class="profile-name px-3 pt-2">
                                                <h4 class="text-primary mb-0">Tindak Lanjut dari
                                                    {{ $item->forkompinda_ref->nama }}
                                                </h4>
                                                <h4 class="pt-3">Status :
                                                    <b>{{ $item->status }}</b>
                                                </h4>
                                                <h4 class="pt-3">Tindak Lanjut :
                                                    <b>{{ $item->deskripsi }}</b>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                        </div>
                        <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                content start
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ***********************************-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('footer')
    <!--  vendors -->
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="{{ asset('') }}assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/select2-init.js"></script>
@endSection

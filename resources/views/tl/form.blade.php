<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tindak Lanjut Bentuk Kejadian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @if (session()->has('pesan'))
                <div class="container text-center">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="col-md-8">
                <div class="text-center mb-3">
                    <a href="index.html"><img src="{{ asset('') }}assets/images/p3klogo.png"
                            class="img-fluid img-thumbnail" alt="" width="100"></a>
                </div>
                <div class="card shadow">
                    @if ($stakeholder)
                        <div class="card-header bg-danger text-white">
                            <h4>Laporan Bentuk Kejadain</h4>
                            <smaal>{{ $bentuk_kejadian->pemberiinfo_ref->nama }} menerangkan bahwa : </smaal>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="/bentukkejadiantl" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_forkompinda" value="{{ $stakeholder->id }}">
                                <input type="hidden" name="id_bentuk_kejadian" value="{{ $bentuk_kejadian->id }}">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul Bentuk Kejadian</label>
                                    <input type="text" class="form-control" id="title" name="judul"
                                        value="{{ $bentuk_kejadian->judul }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="participants" class="form-label">Oknum atau Orang yang Terlibat</label>
                                    <input type="text" class="form-control" id="participants" name="oknum"
                                        value="{{ $bentuk_kejadian->oknum }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="reason" class="form-label">Mengapa Bentuk Kejadian Terjadi</label>
                                    <textarea class="form-control" id="reason" name="mengapa" rows="3" value="{{ $bentuk_kejadian->mengapa }}"
                                        disabled required>{{ $bentuk_kejadian->mengapa }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Bagaimana Kejadian Terjadi</label>
                                    <textarea class="form-control" id="description" name="bagaimana" rows="3"
                                        value="{{ $bentuk_kejadian->bagaiaman }}" disabled>{{ $bentuk_kejadian->bagaimana }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="location" name="lokasi"
                                        value="{{ $bentuk_kejadian->lokasi }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Waktu</label>
                                    <input type="text" class="form-control" id="location" name="waktu"
                                        value="{{ $bentuk_kejadian->waktu }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Kategori</label>
                                    <select class="form-select" id="category" name="katagori" disabled>
                                        <option value="{{ $bentuk_kejadian->judul }}">{{ $bentuk_kejadian->judul }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nature" class="form-label">Sifat</label>
                                    <select class="form-select" id="" name="sifat" disabled>
                                        <option value="{{ $bentuk_kejadian->sifat }}">{{ $bentuk_kejadian->sifat }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Nama yang bisa di hubungi</label>
                                    <input type="text" class="form-control" id="location" name="nama_kontak"
                                        value="{{ $bentuk_kejadian->lokasi }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Nomor kontak yang bisa dihubungi</label>
                                    <input type="text" class="form-control" id="location" name="no_kontak"
                                        value="{{ $bentuk_kejadian->lokasi }}" disabled>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="photo" class="form-label">Foto Pendukung</label>
                                    <input type="file" class="form-control" id="image1" name="foto"
                                        onchange="priviewImage1()">
                                </div>
                                <div>
                                    <img class="img-preview1 img-fluid">
                                </div> --}}

                                <div class="card-header bg-danger text-white">
                                    <h4>Yang menindak Lanjut {{ $stakeholder->nama }}</h4>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Bagaimana ditindaklanjuti</label>
                                    <textarea class="form-control" id="description" name="deskripsi" rows="3" value="{{ old('bagaimana') }}"
                                        required>{{ $tl->deskripsi ?? null }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="nature" class="form-label">Progress</label>
                                    <select class="form-select" id="" name="status" required>
                                        @if ($tl != null)
                                            <option value="{{ $tl->status }}">{{ $tl->status }}</option>
                                            <option value="Proses">Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        @else
                                            <option value="Proses">Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        @endif
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-danger w-100">Submit</button>
                            </form>
                        </div>
                    @else
                        <div class="card-header bg-dafault text-black">
                            <h4>Kode Akses tidak di temukan</h4>
                            <a href="/bentukkejadian"class="btn btn-danger w-100">Coba Kembali </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    function priviewImage1() {
        const image = document.querySelector('#image1');
        const view = document.querySelector('.img-preview1');

        view.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            view.src = oFREvent.target.result;
        }
    }
</script>

</html>

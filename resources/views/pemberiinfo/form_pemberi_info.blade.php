<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Conflict Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center mb-3">
                <a href="index.html"><img src="{{ asset('') }}assets/images/p3klogo.png"
                        class="img-fluid img-thumbnail" alt="" width="130"></a>
            </div>
            @if (session()->has('pesan'))
                <div class="container text-center">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="col-md-8">

                <div class="card shadow">
                    @if ($stakeholder)
                        <div class="card-header bg-danger text-white">
                            <h4>Create Conflict Report</h4>
                            <smaal>{{ $stakeholder->nama }} menerangkan bahwa : </smaal>
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

                            <form action="/bentukkejadian" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_pemberi_info" value="{{ $stakeholder->id }}">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul Bentuk Kejadian</label>
                                    <input type="text" class="form-control" id="title" name="judul"
                                        value="{{ old('judul') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="participants" class="form-label">Oknum atau Orang yang Terlibat</label>
                                    <input type="text" class="form-control" id="participants" name="oknum"
                                        value="{{ old('oknum') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="reason" class="form-label">Mengapa Bentuk Kejadian Terjadi</label>
                                    <textarea class="form-control" id="reason" name="mengapa" rows="3" value="{{ old('mengapa') }}" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Bagaimana Kejadian Terjadi</label>
                                    <textarea class="form-control" id="description" name="bagaimana" rows="3" value="{{ old('bagaimana') }}" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="location" name="lokasi"
                                        value="{{ old('lokasi') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Waktu</label>
                                    <input type="date" class="form-control" id="time" name="waktu"
                                        value="{{ old('waktu') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Kategori</label>
                                    <select class="form-select" id="category" name="katagori" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Kartimas">Kartimas </option>
                                        <option value="Konflik Sosial dan Budaya<">Konflik Sosial dan Budaya</option>
                                        <option value="Politik">Politik</option>
                                        <option value="Ideologi">Ideologi</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nature" class="form-label">Sifat</label>
                                    <select class="form-select" id="" name="sifat" required>
                                        <option value="">Pilih Sifat</option>
                                        <option value="Urgensi">Urgensi</option>
                                        <option value="Antisipasi">Antisipasi</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Nama yang bisa dihubungi</label>
                                    <input type="text" class="form-control" id="location" name="nama_kontak"
                                        value="{{ old('lokasi') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Nomor Kontak yang bisa dihubungi</label>
                                    <input type="text" class="form-control" id="location" name="no_kontak"
                                        value="{{ old('lokasi') }}" required>
                                </div>
                                <div class="mb-3 d-none">
                                    <label for="photo" class="form-label">Foto Pendukung</label>
                                    <input type="file" class="form-control" id="image1" name="foto"
                                        onchange="priviewImage1()">
                                </div>
                                <div>
                                    <img class="img-preview1 img-fluid">
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

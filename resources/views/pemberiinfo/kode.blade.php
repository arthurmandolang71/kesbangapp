<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan Bentuk Kejadian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center mb-3">
                <a href="index.html"><img src="{{ asset('') }}assets/images/p3klogo.png"
                        class="img-fluid img-thumbnail" alt="" width="130"></a>
            </div>
            <div class="col-md-8">
                <div class="card shadow">

                    <div class="card-header bg-danger text-white">
                        <h3>Masukan kode akses untuk melaporkan bentuk kejadian</h3>
                    </div>
                    <div class="card-body">
                        <br>
                        @if (session()->has('pesan'))
                            <div class="container text-center">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ session('pesan') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif

                        <form action="/formbentukkejadian" method="GET">
                            <div class="mb-3">
                                <label for="title" class="form-label">Kode Akses</label>
                                <input type="text" class="form-control" id="title" name="kode" required>
                            </div>
                            <button type="submit" class="btn btn-danger w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

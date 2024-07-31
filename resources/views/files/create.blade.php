<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File Baru - qadrlabs.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h4 class="text-center my-4">UPLOAD FILE</h4>
                </div>
                <a href="{{ route('files.index') }}" <button type="button" class="btn btn-outline-primary"></button>Back</a>

                <div class="card rounded">
                    <div class="card-body">

                        <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">File</label>
                                <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                                
                                <!-- error message untuk image -->
                                @error('file')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Bidang
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Bagian Keuangan Umum</a></li>
                                  <li><a class="dropdown-item" href="#">Bidang Sumber Daya</a></li>
                                  <li><a class="dropdown-item" href="#">Bidang Usaha</a></li>
                                  <li><a class="dropdown-item" href="#">Bidang Penyelenggaraan</a></li>
                                  <li><a class="dropdown-item" href="#">Bidang XXXX</a></li>
                                </ul>
                              </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">Upload</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
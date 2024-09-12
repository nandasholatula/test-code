<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Login 1 - Bootstrap Brain Component -->
    <div class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-5">
                                    <a href="#!">
                                        <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <form id="login-form" action="{{url('prosesrekrument')}}" method="POST">

                        {{ csrf_field() }}
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="email" class="form-label">Nama Pengumuman <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        
                                        <input type="text" class="form-control" name="nama_pengumuman" id="nama_pengumuman" maxlength="100" required >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="kouta" class="form-label">Kouta <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        
                                        <input type="number" class="form-control" name="kouta" id="kouta" value="" maxlength="2" required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="kouta" class="form-label">Tanggal Batas Pendaftaran <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        
                                        <input type="date" class="form-control" name="tanggalbatas" id="tanggalbatas" value="" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="kouta" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        
                                       <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="kouta" class="form-label">Penyelenggara <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        
                                    <input type="text" class="form-control" name="penyelenggara" id="penyelenggara" value="" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
  const form = document.getElementById('login-form');

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const url = form.action;
    const method = form.method;

    fetch(url, {
      method,
      body: formData,
    })
    .then((response) => response.json()
    
    )
    .then(
    alert("berhasil insert")
    );
  });
</script>
</body>

</html>
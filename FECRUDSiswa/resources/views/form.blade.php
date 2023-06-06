<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-md-5">
            <div class="container card">
                <main class="form-login ">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal m-5" style="text-align: center">Daftar Sekarang</h1>
                        <div class="form-floating">
                            <input type="text" name="nis" class="form-control mt-2" id="nis" placeholder="nis" autofocus>
                            <label for="number">Nis</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="nama" class="form-control mt-2" id="nama" placeholder="nama">
                            <label for="text">Nama</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="rombel" class="form-control mt-2" id="rombel" placeholder="rombel">
                            <label for="text">Rombel</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">daftar</button>
                    </form>
                    <small class="d-block text-center mt-3 mb-4">Belum punya akun?
                         <!-- Button trigger modal -->
                        <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          register
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <!-- form regirter-->
                              <div class="modal-body">
                                <form action="{{route('store') }}" method="POST">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="text" name="nis" class="form-control mt-2" id="nis" placeholder="nis" autofocus>
                                        <label for="number">Nis</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="nama" class="form-control mt-2" id="name" placeholder="name">
                                        <label for="text">Nama</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="rombel" class="form-control mt-2" id="rombel" placeholder="rombel">
                                        <label for="text">Rombel</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </form>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div></small>
                </main>
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

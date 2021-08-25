<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Dishanubari</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">CRUD Dishanubari</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <!-- ini navbar -->

    <div class="container-sm mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
          <div class="shadow-sm">
            <div class="card">
              <div class="card-body">
                <form action="add.php" method="post" name="form1">
                  <label for="judul">Judul Buku</label>
                  <div class="form-group">
                    <input
                      id="judul"
                      name="judul"
                      placeholder="Masukan Judul Buku"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
                  <label for="penulis">Nama Penulis</label>
                  <div class="form-group">
                    <input
                      id="penulis"
                      name="penulis"
                      placeholder="Masukan Nama Penulis"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
                  <label for="penerbit">Penerbit</label>
                  <div class="form-group">
                    <input
                      id="penerbit"
                      name="penerbit"
                      placeholder="Masukan Penerbit"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
                  <label for="tahun_terbit">Tahun Terbit</label>
                  <div class="form-group">
                    <input
                      id="tahun_terbit"
                      name="tahun_terbit"
                      placeholder="Masukan Tahun Terbit"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
                  <label for="tgl_terbit">Tanggal Terbit</label>
                  <div class="form-group">
                    <input
                      id="tgl_terbit"
                      name="tgl_terbit"
                      placeholder="Masukan Tanggal Terbit"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
                  <label for="halaman">Halaman Buku</label>
                  <div class="form-group">
                    <input
                      id="halaman"
                      name="halaman"
                      placeholder="Masukan Jumlah Halaman"
                      type="text"
                      class="form-control"
                      required
                    />
                  </div>
               
                    <button name="Simpan" type="submit" class="btn btn-primary mb-3">Simpan Data</button></a>
                  
                  <a href="../index.php"
                    ><button type="button" class="mb-3 btn btn-danger">
                      Batal
                    </button></a
                  >
                </form>
                <?php
                    if(isset($_POST['Simpan'])) {
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $tgl_terbit = $_POST['tgl_terbit'];
                        $halaman = $_POST['halaman'];
                        include_once("../config/database.php");
                        $result = mysqli_query($mysqli, "INSERT INTO buku(judul, penulis, penerbit, tahun_terbit, tgl_terbit, halaman) VALUES('$judul','$penulis','$penerbit','$tahun_terbit','$tgl_terbit','$halaman')");
                       ?>
                        <script type="text/javascript">
                        window.location = "../index.php";
                        </script>      
                      <?php
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
  </body>
</html>

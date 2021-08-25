<?php
include_once("../config/database.php");
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
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
                <form action="post">
                  <label for="judul">Judul Buku</label>
                  <div class="form-group">
                    <input
                      id="judul"
                      value="Bumi"
                      name="judul"
                      placeholder="Masukan Judul Buku"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="penulis">Nama Penulis</label>
                  <div class="form-group">
                    <input
                      id="penulis"
                      value="Tere Liye"
                      name="penulis"
                      placeholder="Masukan Nama Penulis"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="penerbit">Penerbit</label>
                  <div class="form-group">
                    <input
                      value="Gramedia"
                      id="penerbit"
                      name="penerbit "
                      placeholder="Masukan Penerbit"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="tahun_terbit">Tahun Terbit</label>
                  <div class="form-group">
                    <input
                      id="tahun_terbit"
                      value="2014"
                      name="tahun_terbit"
                      placeholder="Masukan Tahun Terbit"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="tgl_terbit">Tanggal Terbit</label>
                  <div class="form-group">
                    <input
                      id="tgl_terbit"
                      value="14 Januari"
                      name="tgl_terbit"
                      placeholder="Masukan Tanggal Terbit"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="halaman">Halaman Buku</label>
                  <div class="form-group">
                    <input
                      id="halaman"
                      value="440"
                      name="halaman"
                      placeholder="Masukan Jumlah Halaman"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <a class="mt-3" href="#">
                    <button class="btn btn-success mb-3">Edit Data</button></a
                  >
                  <a href="../index.html"
                    ><button type="button" class="mb-3 btn btn-danger">
                      Batal
                    </button></a
                  >
                </form>
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

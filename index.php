<?php
// Create database connection using config file
include_once("./config/database.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Dishanubari</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
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

    <div class="container mt-3">
      <div class="shadow-sm">
        <div class="card">
          <div class="card-body">
            <a href="./pages/add.php">
              <button class="btn btn-primary mb-3">+ Tambah Data</button></a
            >
            <table class="table table-bordered table-striped table-hoover">
              <thead class="alert alert-primary">
                <tr>
                  <th>Judul Buku</th>
                  <th>Nama Penulis</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Tanggal Terbit</th>
                  <th>Halaman</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
             <?php 
                while($buku_data = mysqli_fetch_array($result)) {         
                      echo "<tr>";
                      echo "<td>".$buku_data['judul']."</td>";
                      echo "<td>".$buku_data['penulis']."</td>";
                      echo "<td>".$buku_data['penerbit']."</td>";    
                      echo "<td>".$buku_data['tahun_terbit']."</td>";    
                      echo "<td>".$buku_data['tgl_terbit']."</td>";    
                      echo "<td>".$buku_data['halaman']."</td>";    
                      echo "<td>".
                        "<a href='./pages/edit.php?id=$buku_data[id]'>".
                          "<button class=\"btn btn-success\">"."Edit"."</button>".
                     " </a>".
                      " <a href='./pages/delete.php?id=$buku_data[id]'>".
                          "<button class=\"btn btn-danger\">"."Hapus"."</button>".
                      "</a>".
                      " <a href='./pages/detail.php?id=$buku_data[id]'>".
                          "<button class=\"btn btn-warning\">"."Detail"."</button>".
                      "</a>".
                      "</td>".
                  "</tr>";        
                   }
              ?>
                <!-- <tr> -->
                  <!-- <td>Bumi</td>
                  <td>Tere Liye</td>
                  <td>Gramedia Pustaka Utama</td>
                  <td>2014</td>
                  <td>16 Januari</td>
                  <td>440</td>
                  <td>
                    <a href="./pages/edit.html">
                      <button class="btn btn-primary">Edit</button></a
                    >
                    <a href="./pages/delete.html">
                      <button class="btn btn-danger">Hapus</button></a
                    >
                    <a href="./pages/detail.html">
                      <button class="btn btn-success">Lihat</button></a
                    >
                  </td> -->
                <!-- </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
  </body>
</html>

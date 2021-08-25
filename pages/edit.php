<?php
include_once("../config/database.php");
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $judul=$_POST['judul'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    $tahun_terbit=$_POST['tahun_terbit'];
    $tgl_terbit=$_POST['tgl_terbit'];
    $halaman=$_POST['halaman'];
    $result = mysqli_query($mysqli, "UPDATE buku SET judul='$judul',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun_terbit',tgl_terbit='$tgl_terbit',halaman='$halaman' WHERE id=$id");
    ?>
     <script type="text/javascript">
     window.location = "../index.php";
     </script>      
  <?php
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id"); 
while($buku_data = mysqli_fetch_array($result))
{
    $judul = $buku_data['judul'];
    $penulis = $buku_data['penulis'];
    $penerbit = $buku_data['penerbit'];
    $tahun_terbit = $buku_data['tahun_terbit'];
    $tgl_terbit = $buku_data['tgl_terbit'];
    $halaman = $buku_data['halaman'];
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
                <form name="update_buku" method="post" action="edit.php">
                  <label for="judul">Judul Buku</label>
                  <div class="form-group">
                    <input
                      id="judul"
                      value="<?php echo $judul;?>"
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
                      value="<?php echo $penulis;?>"
                      name="penulis"
                      placeholder="Masukan Nama Penulis"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <label for="penerbit">Penerbit</label>
                  <div class="form-group">
                    <input
                      value="<?php echo $penerbit;?>"
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
                      value="<?php echo $tahun_terbit;?>"
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
                      value="<?php echo $tgl_terbit;?>"
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
                      value="<?php echo $halaman;?>"
                      name="halaman"
                      placeholder="Masukan Jumlah Halaman"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>/>
                   <input type="submit" class="btn mb-3 btn-primary" value="Edit Data">
                  <a href="../index.php"
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

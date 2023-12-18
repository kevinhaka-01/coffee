<!DOCTYPE html>
<html lang="en">
<?php
require '../head.php';
       ?>

<body>
  <div class="row" id="proBanner">
   
  </div>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
require '../nav.php';
       ?>

    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
require '../side.php';
       ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                <!-- <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5> -->
              <div class="row">
                
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Data</h4>
                  <?php
                    require '../../koneksi.php'; 
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi , "SELECT * FROM pelanggan WHERE PelangganID = $id");
                    $d = mysqli_fetch_assoc($sql);               
                  ?>
                  <form method="POST" action="prosesUpdate.php" class="forms-sample">
                  <input type="text" value="<?= $d['PelangganID'] ?>" hidden name="id" class="form-control" id="" 
                      placeholder="Nama">
                  <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" value="<?= $d['nama'] ?>" name="nama" class="form-control" id="" 
                      placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="">ALamat</label>
                      <input type="text" value="<?= $d['alamat'] ?>" name="alamat" class="form-control" id="" 
                      placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="">No Handphone</label>
                      <input type="text" value="<?= $d['nohp'] ?>" name="nohp" class="form-control" id="" 
                      placeholder="No HP">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" value="<?= $d['email'] ?>" name="email" class="form-control" id="" 
                      placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" value="<?= $d['password'] ?>" name="password" class="form-control" id="" 
                      placeholder="Password">
                    </div>
                    
                    <button type="submit"  name="edit" class="btn btn-primary mr-2">Edit</button>
                    
                  </form>
                </div>
              </div>
            </div>
              </div>
            </div>
            
          </div>

          <div class="row">
            <div class="col-xl-4 grid-margin stretch-card">
              
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  
                </div>
                
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php
        require '../foot.php';
       ?>
</body>

</html>


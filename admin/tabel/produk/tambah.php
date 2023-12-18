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
                  
                  <form method="POST" action="prosesTambah.php" class="forms-sample">
                    <div class="form-group">
                      <label for="">Nama Produk</label>
                      <input type="text" name="NamaProduk" class="form-control" id="" 
                      placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                      <label for="">Deskripsi</label>
                      <input type="text" name="Deskripsi" class="form-control" id="" 
                      placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                      <label for="">Harga</label>
                      <input type="text" name="Harga" class="form-control" id="" 
                      placeholder="Harga">
                    </div>
                    <div class="form-group">
                      <label for="">Stok</label>
                      <input type="text" name="Stok" class="form-control" id="" 
                      placeholder="Stok">
                    </div>
                    <div class="form-group">
                      <label for="">Kategori</label>
                      <input type="text" name="Kategori" class="form-control" id="" 
                      placeholder="Kategori">
                    </div>
                    
                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Submit</button>
                    
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


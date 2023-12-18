<!DOCTYPE html>
<html lang="en">

<?php 
   require "header.php"
   ?>

  <body>
 
  <?php 
   require "navbar.php"
   ?>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5"> -->
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate"> -->
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Checout</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <!-- <div class="col-xl-8 ftco-animate"> -->
						<form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
							<h3 class="mb-4 billing-heading">RINCIAN PENAGIHAN</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nama Depan</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Nama Belakang</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		         
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Alamat</label>
	                  <input type="text" class="form-control" placeholder="Nomor rumah dan nama jalan">
	                </div>
		            </div>
		         
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Kode Pos</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Telepon</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio"> Membuat sebuah akun?</label>
										  <label><input type="radio" name="optradio"> Kirim ke alamat yang berbeda</label>
										</div>
									</div>
                </div>
	            </div>
	          </form><!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Jumlah Keranjang</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>$20.60</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Pengiriman</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Diskon</span>
		    						<span>$3.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>$17.60</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail ftco-bg-dark p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Metode Pembayaran</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Transfer Bank Langsung</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Cek Pembayaran</label>
											</div>
											</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> Saya telah membaca dan menerima syarat dan ketentuan</label>
											</div>
										</div>
									</div>
									<p><a href="#"class="btn btn-primary py-3 px-4">Tempat Pemesanan</a></p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->

      </div>
    </section> <!-- .section -->

    <?php 
   require "footer.php"
   ?>
   
  </body>
</html>
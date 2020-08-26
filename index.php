<?php
	include "header.php";
	include "menu_navbar.php";
?>
	<!--Slider produk-->
	<link rel="stylesheet" href="lib/css/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="lib/js/owl.carousel.min.js"></script>
	<script src="lib/js/jquery.sticky.js"></script>
	<script src="lib/js/slider.js"></script>
	<style>
	.checked{
			color:orange;
			}
	</style>
	<br>
	<div class="slider-area">
			<!--Slider-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators-->
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!--Indicators-->
	<div class="carousel-inner" role="listbox">
		<div class="item active img-responsive">
		<img src="gambar/sieera1.jpg" alt="New York" width="1200" height="400">
		</div>
		<div class="item">
			<img src="gambar/bb1.jpg" alt="Nevada" width="1200" height="400">
		</div>
		<div class="item">
			<img src="gambar/b11.jpg" alt="Nw" width="1200" height="400">
		</div>
		<div class="item">
			<img src="gambar/bm31.jpg" alt="semarang" width="1200" height="400">
		</div>
	</div>
		
	<!-- Left and right controls-->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-lef" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
</div>
	</div> <!--End solider area-->
	<br><br><br><br>
	
	<!--<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<div class="panel panel-primary">
					<div class="panel-heading"><center>BEST SELLER</center></div>			
					</div>
				<div class="container">
		<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\1.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center>
			<div class="panel footer">Murai Batu Medan<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 600.000<br>
			<strike> Rp. 650.000 </strike><br>
			<br>
			<a href="http://localhost/zuna/detail.php?kd_brg=5"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=5"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>
			
				
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\2.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center>
			<div class="panel footer">Cucak Ijo Sumatera<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 800.000<br>
			<strike> Rp. 850.000 </strike><br>
			<br>
			<a href="http://localhost/zuna/detail.php?kd_brg=6"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=6"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\3.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center>
			<div class="panel footer">Cucak Rowo Medan<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 950.000<br>
			<strike> Rp. 1.000.000 </strike><br>
			<br>
			<a href="http://localhost/zuna/detail.php?kd_brg=7"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=7"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>	
		</div>
<br>


		<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\4.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center><br>
			<div class="panel footer">Beo Jawa<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 800.000<br>
			<strike> Rp. 900.000 </strike><br>
			<br>
			<a href="http://localhost/zuna/detail.php?kd_brg=11"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=11"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>
			
				
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\5.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center>
			<div class="panel footer">Cucak Ijo Kalimantan<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 700.000<br>
			<strike> Rp. 800.000 </strike><br>
			<br>
			<a href="detail.php?kd_brg=15"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=15"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">BEST SELLER</div>
			<div class="panel-body"><center><img src="gambar\produk\6.jpg"
			width="200" height="300" alt="Image"></center></div>
			<center><br><br>
			<div class="panel footer">Kacer Poci<br>
					<div><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span><br></div>	
			<br>
			
			Rp. 600.000<br>
			<strike> Rp. 700.000 </strike><br>
			<br>
			<a href="http://localhost/zuna/detail.php?kd_brg=13"><button type="button" class="btn btn-success">View Detail</button></a>
			<a href="http://localhost/zuna/proses_tambahkrjg.php?id=13"><button type="button" class="btn btn-danger">Buy Now</button></a><br>
			</div></center>
			</div>
		</div>	
		</div>
</div>
					
			</div>
		</div>
</div><br>-->
	
	
	
	<div class="promo-area">
		<div class="zigzag-botton"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="single-promo promo1">
					<i class="fa fa-refresh"></i>
					<p>Kembali 30 Hari</p>
					</div>
				</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo2">
					<i class="fa fa-truck"></i>
					<p>Gratis Ongkir</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo3">
				<i class="fa fa-handshake-o"></i>
					<p>Keamanan Transaksi</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo4">
				<i class="fa fa-users"></i>
					<p>Support 24/7h</p>
				</div>
			</div>
		</div>
	</div>
		</div>
		
		<?php 
	include "produk_terbaru.php";
    include "footer.php"; 
    ?>
		
		
		
		
		
		
		
		
		
		
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BO-LEH</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body>
<!--header-->
<div class="header" >
	<div class="top-header" >
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>

				</ul>
			</div>

			<ul class="header-in">
				<li><a href="404.html">about us</a> </li>
				<li><a href="contact.html">   contact us</a></li>
				<li><a href="signin.php">   Login</a></li>
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
			</ul>
			<div class="search-top">
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
				<div class="world">
					<ul >
						<li><a href="#"><span> </span></a> </li>
						<li><select class="in-drop">
							  <option>EN</option>
							  <option>DE</option>
							  <option>ES</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->

		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="home.php"><img src="images/logo4.png" alt="" ></a>
			</div>
			<div class="top-nav">
					<ul class="megamenu skyblue">
						<li class="active grid"><a  href="makanan.php">Makanan</a>
						<li class="active grid"><a  href="cinderamata.php">Cinderamata</a>
					</ul>
			</div>
			<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty"><img src="images/cart-c.png"  alt=""></a></p>
						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="images/13.jpg" alt="" >
									<img class="etalage_source_image img-responsive" src="images/13.jpg" alt="" >
								</a>
							</li>
							<li>
									<img class="etalage_thumb_image img-responsive" src="images/21.jpg" alt="" >
									<img class="etalage_source_image img-responsive" src="images/21.jpg" alt="" >
							</li>
						</ul>

					</div>
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4>Talas Bogor Sangkuriang</h4>
							<p>Desain kemasan yang modern dengan keju yang tebal dan rasa yang enak, membuat lapis talas ini paling kondang. Dengan harga Rp 33,000 rasa original talas, lapis talas sangkuriang ini masih bertahan dan jadi pilihan sejak pertama kali dipasarkan menjadi oleh-oleh bogor. Ya, lapis talas ini adalah yang pertama di bogor dan saat ini menjadi yang terbesar.</p>
							<div class="star-on">
								<ul>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div>
							<div class="clearfix"> </div>
							</div>

								<label  class="add-to">RP. 33.000</label>

							<div class="available">
								<h6>Pilihan Order</h6>
								<ul>

								<li>Jumlah :<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select></li>
								<li>Pembayaran :
										<select>
										<option>Transfer</option>
										<option>COD</option>
									</select></li>
							</ul>
						</div>

								<a href="verifikasi.php" class="cart ">Order</a>

						</div>
					</div>
				<div class="clearfix"> </div>
				  <!----- tabs-box ---->
		<div class="sap_tabs">
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Deskripsi Produk</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
							  <div class="clearfix"></div>
						  </ul>
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p > Desain kemasan yang modern dengan keju yang tebal dan rasa yang enak, membuat lapis talas ini paling kondang. Dengan harga Rp 33,000 rasa original talas, lapis talas sangkuriang ini masih bertahan dan jadi pilihan sejak pertama kali dipasarkan menjadi oleh-oleh bogor. Ya, lapis talas ini adalah yang pertama di bogor dan saat ini menjadi yang terbesar. </p>

							        </div>
							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
										<ul >
											<li>Multimedia Systems</li>
											<li>Digital media adapters</li>
											<li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
										</ul>
							        </div>
								</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>
							     </div>
							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
</div>
				</div>
				<div class="col-md-3 at-single">
					<div class="single-bottom">
						<h4>Brands</h4>
						<ul>
						<li>
							<input type="checkbox"  id="brand" value="">
							<label for="brand"><span></span> Makanan Ringan</label>
						</li>
						<li>
							<input type="checkbox"  id="brand1" value="">
							<label for="brand1"><span></span> Makanan Manis</label>
						</li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Harga</h4>
						<ul>
						<li>
							<input type="checkbox"  id="color" value="">
							<label for="color"><span></span> < RP. 20.000</label>
						</li>
						<li>
							<input type="checkbox"  id="color1" value="">
							<label for="color1"><span></span> > RP. 30.000</label>
						</li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Produk Terbaik Lain</h4>
							<div class="product-go">
								<img class="img-responsive fashion" src="images/20.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Roti Unyil</a>
								<span class=" price-in"><small>RP.30.000 </small> RP.20.000 </span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
								<img class="img-responsive fashion" src="images/14.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Makroni Panggan</a>
								<span class=" price-in"><small>RP.20.000 </small> RP.15.000</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
							</div>
				</div>
				</div>
				<div class="clearfix"> </div>
		</div>


	</div>
</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.php"><img src="images/logo4.png" alt=""></a>
				<p class="footer-class">© 2017 BO-LEH | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">about us</a> </li>
					<li><a href="contact.html">   contact us</a></li>
					<li ><a href="products.html" >  our stores</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>

					<li ><a href="#" >  testimonials</a></li>
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>

				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>WE SUPPORT</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
</body>
</html>

                              		
            
            <!-- productos -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
					
					         <!-- productos -->
						<div class="search-hotel border-bottom py-2">
						
							<h3 class="agileits-sear-head mb-3">Productos</h3>
							<div class="left-side py-2">
		
                            <ul>
                            					
                            															
							    <?php $catJason = file_get_contents("./categorias.json");
                                    $categorias = json_decode($catJason, true);
                                    
                                
		                              foreach($categorias as $cat){
                                
                                ?>   
                                    <li><a href="./product.php?cat=<?php echo $cat['id']?>&mar=<?php echo isset($_GET['mar'])?$_GET["mar"]:""?>"><span class="icon-chevron-right"></span> <?php echo $cat['nombre']?></a></li>
		                        
		                        
                              <?php }  ?>
                                
                                </ul>  
								
							</div>
						</div>
				
								<!-- marcas -->
						    
                          <div class="search-hotel border-bottom py-2">
						
							<h3 class="agileits-sear-head mb-3">Marcas</h3>
							<div class="left-side py-2">
							
							    <?php $marJason = file_get_contents("./marcas.json");
                                    $marcas = json_decode($marJason, true);
                                    
		                              foreach($marcas as $mar){
                                
                                ?>   
                                    <ul><a href="./product.php?mar=<?php echo $mar['id']?>"><span class="icon-chevron-right"></span> <?php echo $mar['nombre']?></a></ul>
		                        
		                        
                              <?php }  ?>
                                  
								
							</div>
						</div>
                                  	
						
					
						
						
					</div>
					<!-- //product right -->
				</div>
	<!-- //top products -->






	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


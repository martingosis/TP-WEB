
  <?php  
   $seccion="Productos";
	include("inc/header.php");
   
?>


	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			    <span>N</span>uestros
				<span>P</span>roductos</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						
						
						<!-- first section -->
						
						<div class="product-sec1 px-sm-1 px-3 py-sm-5 py-3 mb-4">
							<div class="row">
							
				
        
        
				    <div class="col-md-12 product-men;"> 
								

				            <?php include_once("listado_productos.php");
								
                                    foreach($productos as $prod){
                                        
                                        if($prod['activo'] == true){
                                            
                                            $imprimir = true;
                                            
                                            if(!empty($_GET['cat'])){
                                            
                                                if($prod[ 'categorias'] != $_GET['cat']){
                                                    $imprimir = false;
                                                 
                                            }
                                        }
                                       
                                         if(!empty($_GET['mar'])){
                                            
                                                if($prod[ 'marcas'] != $_GET['mar']){
                                                    $imprimir = false;
                                    
                                            }
                                        }
                                    
                                        
                                }
                                        
                                        
                                 if($imprimir){   
                                        ?>
                                
                                    <div class="col-md-12" style="padding:25px";> 
                                        <div class="men-pro-item simpleCart_shelfItem">
										  <div class="men-thumb-item text-center">
										
										    <div class ="row ">
										        <div class="col-sm-12">
                                                    
                                                    
											     <a  href="<?php echo $prod["link"]?>">
                                                 <img src="images/<?php echo $prod["imagen"]?>">
                                                 </a>
                                                  
                                            
											          
											         
										            </div>
										      </div>
                                          </div>
                                        </div>
								      
								      <div class="item-info-product text-center">
											<h4 class="pt-1">
												<?php echo $prod["nombre"]?>
											</h4>
											    
											    <div class="info-product-price my-2">
											    <span class="item_price">$<?php echo $prod["precio"]?></span>
											    </div>
											 
								      </div>
										
								</div>
				            
				                <?php 
                                
                                 
                                        }
                                    }
                                    
                            ?>
								
                    </div>
								

						</div>
						</div>
						
						
						
					</div>
				</div>
			



	<?php  
    include("inc/sidebar.php"); 
?>
    
            </div>
        </div>
    </div>

	<?php  
    include("inc/footer.php"); 
?>
      
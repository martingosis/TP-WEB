  <?php  
  if(!empty($_GET['idprod'])){$imprimir = false;
											 
  }
   $seccion="Productos";
	include("inc/header.php");
   
?>
                            
      <div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-10 mb-3">
				<span>D</span>etalle
				<span>d</span>e
				<span>P</span>roductos</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-6">
					<div class="wrapper">
						<!-- first section -->
						
						
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">                      
                            
            
                            
                            
							<div class="col-md-12 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
										
								    <?php $catJason = file_get_contents("detalle_producto.json");
                                    $detalle_producto = json_decode($catJason, true);

		                              foreach($detalle_producto as $det){
										
                                          if(!empty($_GET['idprod'])){
										   
										//	echo "<h1> idprod   " .$_GET['idprod']."</h1>";
										//	echo "<h1> id   " .$det['id']."</h1>";
                                               
											if($det['id'] != $_GET['idprod']){
                                                
                                                break;
											}        
                                        }
                                
                                   ?>   
											<img src="images/<?php echo $det['imagen']?>" alt="">
											</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">


                                    <a href="single.php">
									 
									<?php echo $det['nombre']?></a></h4>
		                            <div class="info-product-price my-2">
												<span class="item_price"><?php echo $det['precio']?></span>
												</div>
                                            <div class="info-product-price my-2">
												<span><?php echo $det['detalle']?></span>
                                            </div>
											                                        
                                            <br>
                                            
                                            
                                            <span class="item_price">Opinion del producto</span>
                                            <br>
                                            <br>
                                            
							                 <label class="col-form-label">E-mail</label>
							                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" required="">
						                    
                                           <label class="col-form-label">Comentario</label>
                                            <textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
                                            <br>
                                            <label for="tentacles">Ranking:</label>
                                             <input type="number" id="tentacles" name="tentacles"
                                               min="1" max="5">
                                            
                                            
                                            <br>
                                            <br> 
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="submit" name="submit" value="Enviar" class="button btn" />
													</fieldset>
												</form>
											</div>		                        
                              <?php }  ?>

                                            
                                          



										</div>
									</div>
								</div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
</div>




<?php  
    include("inc/footer.php"); 
?>

<?php  
    include("categorias.php");
    include("marcas.php");
    include("detalle_producto.php");
?>
                                           

<?php 
                                            
         $productos = array(
								
             
                    0 => array ('nombre'=>'Samsung Galaxy J6', 'precio' => '200.00', 'imagen'=>'m1.jpg', 'activo' => true, 'categorias' => 1, "marcas" => 4, ),
             
                    1 => array ('nombre'=>'Samsung Galaxy J7', 'precio' => '300.00', 'imagen'=>'m1.jpg', 'activo' => true, 'categorias' => 1, "marcas" => 4),
                                                
                    2 => array ('nombre'=>'Samsung Galaxy J7 2020', 'precio' =>'350.00', 'imagen'=>'m1.jpg','activo' => true, 'categorias' => 1,"marcas" => 4),
             
                    3 => array ("nombre"=>'Samsung Galaxy A5', 'precio' =>'230.00', 'imagen'=>'m2.jpg','activo' => true, 'categorias' => 1, "marcas" => 4),
             
				    4 => array ('nombre'=>'Samsung A3', 'precio' =>'150.00', 'imagen'=>'mk3.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 4),
             
                    5 => array ('nombre'=>'Samsung A3 2019', 'precio' =>'250.00', 'imagen'=>'mk3.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 4),
             
                    6 => array ('nombre'=>'Samsung S20', 'precio' =>'850.00', 'imagen'=>'m1.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 4),
                    
                    7 => array ('nombre'=>'Samsung A8', 'precio' =>'500.00', 'imagen'=>'m1.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 4),
             
                    8 => array ('nombre'=>'Apple Iphone 11 PRO', 'precio' =>'1100.00', 'imagen'=>'m3.jpg','activo' => true, 'categorias' => 1, "marcas" => 5),
                    
                    9 => array ('nombre'=>'Apple Iphone 11', 'precio' =>'1000.00', 'imagen'=>'m3.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 5),
                    
                    10 => array ('nombre'=>'Apple Iphone X', 'precio' =>'880.00', 'imagen'=>'m3.jpg',
                    'activo' => true, 'categorias' => 1,"marcas" => 5),

                    11 => array ('nombre'=>'Apple Iphone X PRO', 'precio' =>'980.00','imagen'=>'m3.jpg','activo' => true, 'categorias' => 1, "marcas" => 5),
                    
                    12 => array ('nombre'=>'Huawei P9', 'precio' =>'200.00', 'imagen'=>'mk1.jpg',
                    'activo' => true, 'categorias' => 1,"marcas" => 6),

                    13 => array ('nombre'=>'Huawei P10', 'precio' =>'243.00', 'imagen'=>'mk2.jpg',
                    'activo' => true, 'categorias' => 1, "marcas" => 6),
                          
                    14 => array ('nombre'=>'Televisor Samsung 55 4k', 'precio' =>'550.00','imagen'=>'m4.jpg','activo' => true, 'categorias' => 2, "marcas" => 4),
                    
                    15 => array ('nombre'=>'Televisor Samsung 50 FULL HD', 'precio' =>'500.00','imagen'=>'m4.jpg','activo' => true, 'categorias' => 2, "marcas" => 4),
                    
                    16 => array ('nombre'=>'Heladera Samsung', 'precio' =>'450.00', 'imagen'=>'m7.jpg','activo' => true, 'categorias' => 3, "marcas" => 4),

                    17 => array ('nombre'=>'Heladera Noblex', 'precio' =>'250.00', 'imagen'=>'m10.jpg','activo' => true, 'categorias' => 3, "marcas" => 8),

                    18 => array ('nombre'=>'Heladera Noblex No Frost', 'precio' =>'350.00', 'imagen'=>'m10.jpg','activo' => true, 'categorias' => 3, "marcas" => 8),
             
                    19 => array ('nombre'=>'Heladera LG No Frost', 'precio' =>'400.00', 'imagen'=>'m12.jpg','activo' => true, 'categorias' => 3, "marcas" => 7)
                                    

				);
?>
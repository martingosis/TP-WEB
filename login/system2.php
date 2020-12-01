<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="../css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="../css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
		</div>
	</div>
	<!-- //top-header -->

	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="../index.php" class="font-weight-bold font-italic">
							<img src="../images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="<?php echo($seccion=="Logout")?"nav-item active mr-lg-2 mb-lg-0 mb-2":""?>">
							<a class="nav-link" href="../index.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
  
  
</body>  
        
            <?php
            include_once('func.php');

            if(isset($_GET['del'])){
                //obtengo el contenido del archivo
                $datos = file_get_contents('../marcas.json');
                //convierto a un array
                $datosJson = json_decode($datos,true);
                //var_dump($datosJson);
                //borro del array
                unset($datosJson[$_GET['del']]);
                //trunco el archivo
                $fp = fopen('../marcas.json','w');
                //convierto a json string
                $datosString = json_encode($datosJson);
                //guardo el archivo
                fwrite($fp,$datosString);
                fclose($fp);
                redirect('system2.php');
            }
            ?>
           
            
     <div class="container">
            <div class="row">
            <div class="col-4">

                           
                <ul>
                    <li><a href="system.php">Categorias</a></li>
                    <li><a href="system2.php">Marca</a></li>
                    <li><a href="comentarios.php">Comentarios</a></li>      
                </ul>    
            </div>
            
            <div class="col-8">
                
            

            <h2>Marcas</h2>

            <a href="marcas_add.php">[ADD]</a>

            <table border=1>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>acciones</td>
                </tr>
                <?php
                    $datos = file_get_contents('../marcas.json');
                    $datosJson = json_decode($datos,true);
                    //var_dump($datosJson);
                    foreach($datosJson as $cat){ ?>
                        <tr>
                            <td><?php echo $cat['id']?></td>
                            <td><?php echo $cat['nombre']?></td>
                            <td><a href="marcas_add.php?edit=<?php echo $cat['id']?>">[MOD]</a> - 
                                <a href="system2.php?del=<?php echo $cat['id']?>">[DEL]</td>
                        </tr>
                    <?php } ?>
            </table>
            
               </div>
</div>
</div>
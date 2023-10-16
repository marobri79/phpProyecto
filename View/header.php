<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CRUD MVC PHP + MySQL</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css" />

	      <link rel="stylesheet" href="assets/css/footer-distributed.css">
				<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">        
	</head>
    <body>
    <div class="container  w-100 m-0 p-0" style="max-width:99%">
         <!-- Topbar Start -->
    <div class="container-fluid  py-3 d-none d-md-block" style="background-color: #7393e6;
  background-image: url('https://www.transparenttextures.com/patterns/fresh-snow.png')">
        <div class="container" style="max-width:100%">
            <div class="row">
                <div class="col-md-4 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        
                   
                    </div>
                    
                </div>
                <div class="col-md-4 text-center text-lg-center">
                    <a class="text-white pl-3" href=""><h1 class="tittle">Dulceria Maria</h1></a>
                </div>
                <div class="col-md-4 text-center text-lg-right">
                    <div class="row">
            
                        <form onsubmit="event.preventDefault()" class="box"> 
                            <div class='p-2'>
                                <input class="inputL" type="text" name="" placeholder="Username">
                                <input class="inputL" type="password" name="" placeholder="Password"> 
                            </div>
                            <div>
                                <a class="forgot text-muted" href="?c=contactenos">Olvidaste el password?</a>
                                <a class="forgot text-muted" href="?c=contactenos">Registrate</a>  
                                <input type="submit" name="" value="Login" href="#"> 
                            </div>
                        </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="?c=p" class="nav-item nav-link">Producto</a>
                        <a href="?c=proveedor" class="nav-item nav-link">Proveedor</a>
                    </div>

                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
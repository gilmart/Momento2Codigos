<!DOCTYPE html>

<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coolie | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>

      
    

        <nav class="navbar navbar-default ">
            <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="dashboard.php"><img src="imagen/logos.png" width="180" height="120" alt=""></a>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="dashboard.php">Dashboard</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="registroProductos.php">Registro</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="listaProductos.php">Lista</a></li>
                    </ul>    
            </div>
        </nav>

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <div class="item"><img src="imagen/KOZ08513.jpg" alt="coolies"></div> 
                    <div class="item"><img src="imagen/KOZ08885.JPG" alt="bottle coolies"></div> 
                    <div class="item"><img src="imagen/KOZ03491-min.JPG" alt="personas disfrutando"></div>   
                </div>
            </div>
        </div> 

       <div class="container slider-content">
             <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Bienvenido a tu Dashboard</h2>
                        <p><strong>Ahora, puedes ingresar la información del producto que deseas registrar</strong></p> 

                                <div class="container">
                                    <form action="registroProductos.php"  method="POST" class="mt-3">
                                        <div class="right">
                                            <input type="text" class="field" placeholder="NOMBRE DEL PRODUCTO" name="nombre">
                                            <input type="text" class="field" placeholder="MARCA" name="marca">
                                            <input type="number" class="field" placeholder="PRECIO" name="precio">
                                            <textarea placeholder="DESCRIPCION" class="field" name="descripcion"></textarea>
                                            <input type="text" class="field" placeholder="FOTO" name="foto">
                                            <button type="submit" class="btn" name="botonRegistro">Registrar</button>
                                        </div>
                                    </form> 
                                 </div> 
                    </div>  
                </div>    
         </div>
                
                      
                                
                 
       

        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <script src="assets/js/owl.carousel.min.js"></script>   
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/main.js"></script>
       
    </body>
</html>
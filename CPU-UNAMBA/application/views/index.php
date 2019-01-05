<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CPU-UNAMABA</title>
        <!--css-->
        
        <link href="<?php echo base_url('public/template/public/css/bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/css/carousel.css')?>" rel="stylesheet" >
        <!--js-->
        <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>    
    </head>

    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navegación de palanca</font></font></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CPU-UNAMBA</font></font></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                
                                <li class="active"><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nosostros</font></font></a></li>
                                <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Infraestructura</font></font></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desplegable </font></font><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('estudiante/index')?>">Ciclos</a></li>
                                        <li><a href="#">Areas</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Inscripcion online</a></li>
                                <li><a href="#">Iniciar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        

    </body>
    
</html>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                  <a class="navbar-brand" href="#">
                      <div class="row">
                      <div class="col"><img alt="Brand" src="<?PHP echo base_url('public/img/LOGO-UNAMBA.png')?>" class="img-responsive">
                    </div>
                      </div>
                  </a>
                </div>
            </div>
        </nav>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>inicio/login">Admisión</a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>auth">Iniciar Sesión</a>
              </li>
          </ul>
            <form class="form-inline mt-2 mt-md-0" action="<?php echo base_url();?>inicio/login" method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="N° de recibo" aria-label="Search" name="num_rec">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Ingresar</button>
          </form>
        </div>
      </nav>
    </header>
<main role="main">
    <br>
    <br>
   
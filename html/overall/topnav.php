<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="views/app/img/logo.png" alt="Logo" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Iniciar sesion <span class="sr-only">(current)</span></a>
                    </li> -->
                    
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu categorias" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="#">Telefonos</a>
                            <a class="dropdown-item" href="#">Impresoras</a>
                            <a class="dropdown-item" href="#">Computadoras</a>
                            <a class="dropdown-item" href="#">Laptos</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
                </form>

                <ul class="navbar-nav">
                    
                        <!-- <a class="nav-link mbr-buttons__link" aria-haspopup="true" aria-expanded="false" data-target="#Login">Iniciar sesion</a> -->

                        <?php
                            if(!isset($_SESSION['app_id'])){
                                echo '<li class="nav-item dropdown "><a class="nav-link mbr-buttons__link btn" data-toggle="modal" data-target="#Login">Iniciar sesion</a></li>';
                            } else {
                                echo '<li class="nav-item dropdown"><a href="?view=logout" class="nav-link mbr-buttons__link btn">'. strtoupper($_cliente[$_SESSION['app_id']]['usuario']) .'</a></li>';
                            }
                        ?>

                       
                        
                                        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedido (4)</a>
                        <div class="dropdown-menu dropdown-menu-right pedido" aria-labelledby="dropdown07">
                            <div class="p-productos">
                                <div class="p-producto">
                                    <img src="views/app/img/samsung.jpg" alt="" class="p-img">
                                    <div class="p-group">
                                        <span class="p-title">Samgung A20</span>
                                        <p class="p-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, alias!</p>
                                        <p class="p-price"> 420$</p>
                                        <button type="submit" class="btn">Remover</button>
                                    </div>                                    
                                </div>

                                <div class="p-producto">
                                    <img src="views/app/img/iphone.png" alt="" class="p-img">
                                    <div class="p-group">
                                        <span class="p-title">Iphone 14</span>
                                        <p class="p-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, alias!</p>
                                        <p class="p-price"> 289$</p>
                                        <button type="submit" class="btn">Remover</button>
                                    </div>                                    
                                </div>

                                <div class="p-producto">
                                    <img src="views/app/img/laptop.png" alt="" class="p-img">
                                    <div class="p-group">
                                        <span class="p-title">Laptop</span>
                                        <p class="p-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, alias!</p>
                                        <p class="p-price"> 140$</p>
                                        <button type="submit" class="btn">Remover</button>
                                    </div>                                    
                                </div>

                                <div class="p-producto">
                                    <img src="views/app/img/iphone.png" alt="" class="p-img">
                                    <div class="p-group">
                                        <span class="p-title">Iphone 14</span>
                                        <p class="p-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, alias!</p>
                                        <p class="p-price"> 160$</p>
                                        <button type="submit" class="btn">Remover</button>
                                    </div>                                    
                                </div>

                                <footer class="p-total btn">Total: 1250$<button>Comprar</button></footer>                                
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
    </header>

<?php
  include(HTML_DIR . '/public/login.html');
  include(HTML_DIR . '/public/reg.html');


?>
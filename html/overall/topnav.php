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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedido</a>
                        <div class="dropdown-menu dropdown-menu-right pedido" aria-labelledby="dropdown07">
                            <div class="p-productos">

                            <?php

if(!empty($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        echo '
<div class="p-producto">
    <img src="views/app/img/'.$value['wp-img'].'" alt="" class="p-img">
    <div class="p-group">
        <span class="p-title">'.$value['wp-nombre'].'</span>
        <p class="p-desc">'.$value['wp-desc'].'</p>
        <p class="p-price">'.$value['wp-precio'] .'$ * '.$value['cantidad'].'</p>
        <a href="index.php?action=remove&id='.$value['id_producto'].'">
        <button type="submit" class="btn">Remover</button>
                    </a>
        
    </div>                                    
</div>
';

    }

    $total = $total + $value['cantidad'] * $value['wp-precio'];
    echo '<tr>
    <td>'.number_format($total,2).'</td>
    <td><a href="?action=clearall">
    <button>Clear All</button>
    </a></td>
    <td><a href="?action=comprar">
    <button>Comprar</button>
    </a></td>
</tr></table></br>';
}

?> 

                                <!-- <div class="p-producto">
                                    <img src="views/app/img/samsung.jpg" alt="" class="p-img">
                                    <div class="p-group">
                                        <span class="p-title">Samgung A20</span>
                                        <p class="p-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, alias!</p>
                                        <p class="p-price"> 420$</p>
                                        <button type="submit" class="btn">Remover</button>
                                    </div>                                    
                                </div> -->

                                

                                                                
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
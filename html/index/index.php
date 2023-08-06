<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<?php include(HTML_DIR . 'overall/topnav.php'); ?>  

    <main>
        <div class="products">

        <div>

  <?php
    $db = new Conexion();

    $por_pagina = 2;

    if(isset($_GET['pagina'])){
      $pagina = $_GET['pagina'];
    }else{
      $pagina = 1;
    }

    $empieza = ($pagina-1) * $por_pagina;

    $sql = $db->query("SELECT * FROM producto LIMIT $empieza, $por_pagina");

  ?>

<?php
  while($fila = mysqli_fetch_assoc($sql)){
    echo '<div class="product">
    <img src="views/app/img/'.$fila['wp-img'].'" alt="Img" class="product--img">
    <div class="product--desc">
        <span class="produc--title"><a href="#" class="p-link">'.$fila['wp-nombre'].'</a></span>
        <p class="product--det">'.$fila['wp-desc'].'</p>
    </div>
    
    <div class="product--add">
        <input type="number" placeholder="1" class="add-number">
        <button class="btn">Añadir</button>
    </div>
    <div class="product--price">Precio: $'.$fila['wp-precio'].'</div>
</div>';
  }
?>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <?php
      $sql2 = $db->query("SELECT * FROM producto");
      $total_registros = $db->rows($sql2);

      $total_paginas = ceil($total_registros / $por_pagina);

      echo ' <a class="page-link" href="?view=index&pagina=1" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
      <span class="sr-only">Previous</span>
    </a>';
      ?>
     
    </li>

    <?php
      for($i=1; $i<=$total_paginas; $i++){
        echo '<li class="page-item"><a class="page-link" href="index.php?view=index&pagina='.$i.'" >'.$i.' </a></li>';
      }

      echo '<li class="page-item">
      <a class="page-link" href="index.php?view=index&pagina='.$total_paginas.'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>';
    ?>

    
  </ul>
</nav>

<?php
            

            $db->close();

          ?>

        

        <!-- productos 
            <div class="product">
                <img src="views/app/img/samsung.jpg" alt="Img" class="product--img">
                <div class="product--desc">
                    <span class="produc--title"><a href="#" class="p-link">Samsung A20 4/64</a></span>
                    <p class="product--det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, ducimus?</p>
                </div>
                
                <div class="product--add">
                    <input type="number" placeholder="1" class="add-number">
                    <button class="btn">Añadir</button>
                </div>
                <div class="product--price">Precio: $80</div>
            </div>
            productos -->
            
        </div>
    </main>

<?php include(HTML_DIR . 'overall/footer.php'); ?>  
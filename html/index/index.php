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
        
        while($row = mysqli_fetch_array($sql)){
            echo '<form method="POST" action="index.php?id='.$row['id_producto'].'">
            <div class="product">
        <img src="views/app/img/'.$row['wp-img'].'" alt="Img" class="product--img">
        <div class="product--desc">
            <span class="produc--title"><a href="index.php?id='.$row['id_producto'].'" class="p-link">'.$row['wp-nombre'].'</a></span>
            <p class="product--det">'.$row['wp-desc'].'</p>
        </div>
        
        <div class="product--add">
            <input type="number" name="cantidad" value="1" class="add-number">
            <input type="hidden" name="id_pructo" value="'.$row['id_producto'].'">
            <input type="hidden" name="wp-nombre" value="'.$row['wp-nombre'].'">
            <input type="hidden" name="wp-precio" value="'.$row['wp-precio'].'">
            <input type="hidden" name="wp-desc" value="'.$row['wp-desc'].'">
            <input type="hidden" name="wp-img" value="'.$row['wp-img'].'">
            <input type="submit" class="btn" name="add_to_cart" value="Add to cart">          
        </div>
        <div class="product--price">Precio: $'.number_format($row['wp-precio'],2).'</div>
    </div>
        </form>';
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
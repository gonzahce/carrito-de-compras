<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<?php include(HTML_DIR . 'overall/topnav.php'); ?>  

    <main>
        <div class="products">
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

            <div class="product">
                <img src="views/app/img/iphone.png" alt="Img" class="product--img">
                <div class="product--desc">
                    <span class="produc--title"><a href="#" class="p-link">Iphone 14</a></span>
                    <p class="product--det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, ducimus?</p>
                </div>
                
                <div class="product--add">
                    <input type="number" placeholder="1" class="add-number">
                    <button class="btn">Añadir</button>
                </div>
                <div class="product--price">Precio: $750</div>
            </div>

            <div class="product">
                <img src="views/app/img/laptop.png" alt="Img" class="product--img">
                <div class="product--desc">
                    <span class="produc--title"><a href="#" class="p-link">NOTEBOOK HP 240 G8 14</a></span>
                    <p class="product--det">INTEL CELERON N4020/ 4GB RAM</p>
                </div>
                
                <div class="product--add">
                    <input type="number" placeholder="1" class="add-number">
                    <button class="btn">Añadir</button>
                </div>
                <div class="product--price">Precio: $1500</div>
            </div>
            
        </div>
    </main>

<?php include(HTML_DIR . 'overall/footer.php'); ?>  
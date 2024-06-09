<?php include_once 'Views/template/header-principal.php'; ?>
<style>
.overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.0);
    z-index: 2;

}

.banner_taital {
    font-size: 24px;
}
</style>
<!-- banner section start -->
<div class="banner_section layout_padding">
    <div class="container">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/c201.png" class="img-fluid" alt="Imagen a">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_9"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/c301.png" class="img-fluid" alt="Imagen b">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_10"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/c311.png" class="img-fluid" alt="Imagen c">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_9"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <!-- Esta es la parte corregida -->
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/c511.png" class="img-fluid" alt="Imagen d">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_8"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/601.png" class="img-fluid" alt="Imagen e">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_6"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/611.png" class="img-fluid" alt="Imagen f">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_6"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/621.png" class="img-fluid" alt="Imagen g">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_7"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <img src="./assets/images/631.png" class="img-fluid" alt="Imagen h">
                        <div class="overlay">
                            <h1 class="banner_taital text-dark">Inicie <br>Tus compras favoritas</h1>
                            <div class="buynow_bt"><a href="http://localhost/Almacen_online1/#categoria_10"
                                    class="btn btn-light">Compra ahora</a></div>
                        </div>
                    </div>
                </div>
                <!-- Fin de la parte corregida -->
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>



<!-- banner section end -->

</div>
<!-- banner bg main end -->

<!-- fashion section start -->
<?php foreach ($data['categorias'] as $categoria) { ?>
<div class="fashion_section">
    <div class="container" id="categoria_<?php echo $categoria['id']; ?>">
        <h1 class="fashion_taital text-uppercase"><?php echo $categoria['categoria']; ?></h1>
        <div class="row <?php echo (count($categoria['productos']) > 0) ? 'multiple-items' : ''; ?>">
            <?php foreach ($categoria['productos'] as $producto) { ?>
            <div class="<?php echo (count($categoria['productos']) > 2) ? 'col-lg-4' : 'col-lg-12'; ?>">
                <div class="box_main">
                    <h4 class="shirt_text"><?php echo $producto['nombre']; ?></h4>
                    <p class="price_text">Precio <span style="color: #262626;">$
                            <?php echo $producto['precio']; ?></span></p>
                    <div class="text-center">
                        <img data-lazy="<?php echo BASE_URL . $producto['imagen']; ?>" class="zoom-img" />
                    </div>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#" class="btnAddcarrito"
                                prod="<?php echo $producto['id']; ?>">Añadir</a></div>
                        <div class="seemore_bt"><a href="#">Leer más</a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>

<?php include_once 'Views/template/footer-principal.php'; ?>

<style>
.zoom-img {
    transition: transform 0.3s ease;
}

.zoom-img:hover {
    transform: scale(0.9);
}

footer {
    width: 100%;
    padding: 50px 0px;
    background-image: url(../assets\images\background-footer.svg);
    background-size: cover;
}

.container__footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    margin-top: 40px;
}

.box__footer {
    display: flex;
    flex-direction: column;
    padding: 20px;
    width: 200px;
}

.box__footer .footer_logo img {
    width: 65px;
    height: 80px;
}

.box__footer .terms {
    max-width: 250px;
    margin-top: 10px;
    font-size: 14px;
    color: aliceblue;
}

.box__footer h2 {
    margin-bottom: 20px;
    font-size: 18px;
    color: aliceblue;
}

.box__footer a {
    margin-top: 5px;
    font-size: 14px;
    text-decoration: none;
    /* Quita la subrayado de los enlaces */
}

.box__footer a:hover {
    text-decoration: underline;
    /* Añade subrayado al pasar el mouse sobre los enlaces */
}

.box__copyright {
    max-width: 1200px;
    margin: auto;
    text-align: center;
    padding: 20px 40px;
}

.box__copyright p {
    margin-top: 10px;
    font-size: 12px;
}

.box__copyright hr {
    height: 1px;
    background-color: #7a7a7a;
    margin-bottom: 10px;
}

/* Estilos para los enlaces de redes sociales */
.box__footer a .fab {
    font-size: 16px;
}
</style>







<script>
$('.multiple-items').slick({
    lazyLoad: 'ondemand',
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
</script>

</body>

</html>
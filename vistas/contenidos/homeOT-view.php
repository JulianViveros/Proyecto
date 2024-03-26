<main class="full-box main-container">
    <!-- Incluir la barra lateral -->
    <?php include "./vistas/inc/NavLateral.php"; ?>

    <?php include "./vistas/inc/header.php"; ?>

    <section class="full-box page-content">

        <div class="page-content">

            <div class="banner">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo SERVERURL; ?>vistas/img/img1.jpg" alt="Primera imagen">
                            <div class="carousel-caption">
                                <h5>Título de la primera imagen</h5>
                                <p>Descripción de la primera imagen.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo SERVERURL; ?>vistas/img/img2.jpg" alt="Segunda imagen">
                            <div class="carousel-caption">
                                <h5>Título de la segunda imagen</h5>
                                <p>Descripción de la segunda imagen.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo SERVERURL; ?>vistas/img/img3.jpg" alt="Tercera imagen">
                            <div class="carousel-caption">
                                <h5>Título de la tercera imagen</h5>
                                <p>Descripción de la tercera imagen.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo SERVERURL; ?>vistas/img/img4.jpg" alt="Cuarta imagen">
                            <div class="carousel-caption">
                                <h5>Título de la cuarta imagen</h5>
                                <p>Descripción de la cuarta imagen.</p>
                            </div>
                        </div>
                        <!-- Agrega más imágenes aquí -->
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>

            <div class="choose-option">
                <h2 style='color: #0053A9'>Elegir opción</h2>
            </div>

            <!-- Content -->
            <div class="tile-container">

                <div class="card">
                    <div class="card-content">
                        <div class="content-img">
                            <img class="card-image" src="<?php echo SERVERURL; ?>vistas/img/ensamble.png"
                                alt="Ensamble">
                        </div>
                        <div class="card-details">
                            <h2 class="card-title">Ensamble</h2>
                            <p class="card-description">Descripción</p>
                            <div class="registradas">Registradas</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="content-img">
                            <img class="card-image" src="<?php echo SERVERURL; ?>vistas/img/corte.png"
                                alt="Prendas Cortadas">
                        </div>
                        <div class="card-details">
                            <h2 class="card-title">Prendas Cortadas</h2>
                            <p class="card-description">Descripción</p>
                            <div class="registradas">Registradas</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="content-img">
                            <img class="card-image" src="<?php echo SERVERURL; ?>vistas/img/devolucion.png"
                                alt="Devolucion">
                        </div>
                        <div class="card-details">
                            <h2 class="card-title">Devolución por defectos</h2>
                            <p class="card-description">Descripción
                            </p>
                            <div class="registradas">Registradas</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="content-img">
                            <img class="card-image" src="<?php echo SERVERURL; ?>vistas/img/devolucion.png"
                                alt="Devolucion">
                        </div>
                        <div class="card-details">
                            <h2 class="card-title">Prendas quirurgicas</h2>
                            <p class="card-description">Descripción
                            </p>
                            <div class="registradas">Registradas</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
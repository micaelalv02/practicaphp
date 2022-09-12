<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
?>

<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Imagen 2.png" class="d-block w-100" style="width:100%; height: 1033px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Imagen 5.png" class="d-block w-100" style="width:100%; height: 1033px;  object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Imagen 6.png" class="d-block w-100" style="width:100%; height: 1033px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>

<section class="m-5">
    <div class="container horizontal-container">
        <div class="row">
            <div class="col-5 p-0">
                <img src="assets/images/recruiting.jpg" style="object-fit:cover;width:100%;height:100%;">
            </div>
            <div class="col-7 p-5 ms-0">
                <h1 class="text-white titulo">Recruiting</h1>
                <p class="text-white texto">
                Reclutamos el activo perfecto para que logres tener un equipo de alto rendimiento: 
                el Servicio de Recruiting es una excelente opción para empresas que tienen su propio Departamento de Recursos Humanos 
                pero buscan en un equipo de profesionales externos como el nuestro la búsqueda del talento especializado para ocupar 
                una posición específica en la empresa.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="m-5">
    <div class="container">
        <div class="row">
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/e-commerce.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 300px;">E-commerce</h2>
                        <p class="vard-text text-white">Con más de 175 tiendas online desarrolladas en este tiempo, 
                            tenemos un expertise único en creación de herramientas de venta online para diferentes rubros. 
                            Esta experiencia nos permite ser más veloces en la entrega y puesta en marcha de la plataforma y 
                            brindarle a nuestros clientes la asesoría necesaria para que su tienda online sea un éxito.</p>
                    </div>
                </div>
            </div>
            <div class="col 4">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/redes-sociales.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 300px;">Redes Sociales</h2>
                        <p class="vard-text text-white">Desarrollo de campañas y creación de contenido digital para redes sociales, llevamos adelante campañas de marketing de performance, buscando obtención de leads, contactos directos a whatsapp y generación de clientes potenciales como también la creación de comunidades en las redes sociales más importantes.</p>
                    </div>
                </div>
            </div>
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width:100%;">
                    <img class="img-card-top" src="assets/images/marketing-operativo.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body text-white">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Marketing Operativo</h2>
                        <p class="vard-text">Nuestro Departamento de Marketing & Comunicación genera e implementa acciones de 
                            marketing operativo enfocado en la venta y comercialización de productos de nuestros clientes bajo 
                            las decisiones tomadas gracias al Marketing Estratégico.
                            <br>Utilizamos técnicas de neuromarketing que nos permiten aumentar nuestro nivel de efectividad.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include("assets/includes/footer.inc.php");
?>
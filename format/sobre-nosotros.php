<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
include("classes/contents.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$contentsList = $contents->view($_GET['id']);
?>

<section class="m-5">
    <div class="row">
        <h1 class="text-center"><?= $contentsList['title'] ?></h1><br>
        <h4><?= $contentsList['content'] ?>
            <!--Instalados en 1994 en la ciudad de San Francisco, Córdoba -“el interior del interior” de la República Argentina- 
                desarrollamos un innovador modelo integral de consultoría con una propuesta de valor definida: 
                hacer crecer empresas.-->
        </h4><br>

        <?php if (!empty($contentsList['images'][0]['url'])) { ?>
            <img src="<?= URL . "/admin/assets" . $contentsList['images'][0]['url'] ?>" style="object-fit: cover; width: 100%; height: 600px;">
        <?php } else { ?>
            <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 600px;">
        <?php } ?>

        <h5 class="mt-3"><?= $contentsList['content'] ?>
            <!--Abordando a nuestros clientes y haciéndolos crecer en facturación, realizamos planes de acción y crecimiento
            desde las áreas de marketing, comunicación y publicidad, desarrollos digitales, recursos humanos y comercialización
            con un modelo de trabajo único y alta tasa de éxito.-->
        </h5><br>
        <?php if (!empty($contentsList['images'][1]['url'])) { ?>
            <img src="<?= URL . "/admin/assets" . $contentsList['images'][1]['url'] ?>" style="object-fit: cover; width: 100%; height:600px;">
        <?php } else { ?>
            <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 100%;">
        <?php } ?>

        <h5 class="mt-3"><?= $contentsList['content'] ?>
            <!--Trabajamos en el crecimiento económico de sus clientes: más de 500 marcas han confiado en nosotros en estos 28 años de trabajo,
            en todo el país como así también en Italia, México, Brasil, y Uruguay.-->
        </h5>

        <h5 class="mt-3"> <?= $contentsList['content'] ?>
            <!--Nuestro equipo de más de 20 especialistas en comunicación, programación & desarrollo, recursos humanos,
            investigación de mercado y estadísticas viven con intensidad el lema de nuestro equipo, el #TeamRocha: “work hard play hard”,
            un equipo que disfruta de ponerse la camiseta de cada cliente y trabajar con pasión por hacerlo crecer.-->
        </h5>
        <br>

        <?php if (!empty($contentsList['images'][2]['url'])) { ?>
            <img src="<?= URL . "/admin/assets" . $contentsList['images'][2]['url'] ?>" style="object-fit: cover; width: 100%; height:600px;">
        <?php } else { ?>
            <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 100%;">
        <?php } ?>

        <?php if (!empty($contentsList['images'][3]['url'])) { ?>
            <img class="mt-5" src="<?= URL . "/admin/assets" . $contentsList['images'][3]['url'] ?>" style="object-fit: cover; width: 100%; height:600px;">
        <?php } else { ?>
            <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 100%;">
        <?php } ?>

        <h3><br><?= $contentsList['content'] ?>
            <!--Nuestra consultora cuenta con una estructura edilicia de más de 700m2 de PURO DISEÑO.-->
        </h3>
        
        <h5><?= $contentsList['content']?>
            <!--Con un gran parque con árboles frutales, Salón de Usos Múltiples con pool, guitarras, tocadisco, proyectores para films,
            en donde se realizan desde reuniones sociales hasta after office para nuestros clientes, como así también zona de capacitaciones
            y producciones de streaming de primer nivel. Directorio para reuniones corporativas y más de 30 puestos de trabajo.-->
        </h5>
    </div>
</section>

<?php
include("assets/includes/footer.inc.php");
?>
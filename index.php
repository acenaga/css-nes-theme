<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS NES</title>
    <!-- Bootstrap 5.3.7 -->
    <link rel="stylesheet" href='<?= get_template_directory_uri() ?>/assets/bootstrap-5.3.7-dist/css/bootstrap.min.css'>
    <!-- NES.css CDN -->
    <link rel="stylesheet" href='<?= get_template_directory_uri() ?>/assets/nes-css/css/nes.min.css'>
    <!-- Google Fonts para el estilo retro -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <!-- Estilos Perzonalizados -->
    <link rel="stylesheet" href='<?= get_template_directory_uri() ?>/style.css'>
</head>

<body>
    <div class="container">
        <header class="">
            Tema de prueba
        </header>
        <main>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <h1><?= the_title(); ?></h1>
                    <div><?= the_content(); ?></div>
                    <button type="button" class="nes-btn is-primary">Primary</button>
            <?php
                }
            }
            ?>
        </main>
        <footer>
            Empezando
        </footer>
    </div>
    <script src='<?= get_template_directory_uri() ?>/assets/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>
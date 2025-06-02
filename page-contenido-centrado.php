<?php
/*
    *Template Name: Contenido Centrado (No Sidebears)
*/
    get_header();
?>
    <main class="contenedor seccion contenido-centrado">
        <?php
            while( have_posts()): the_post();

            the_title('<h1 class="text-center text-primary">','</h1>');

            if(has_post_thumbnail()){//Si hay una imagen entonces muestrala
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
            }
            the_content();

        endwhile;
        ?>

    </main>
</body>
</html>
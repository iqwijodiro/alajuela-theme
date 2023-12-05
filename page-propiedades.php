<?php

/* 
* Template Name: Listado de propiedades
*/
get_header();
?>

    <main class="container section">
        <ul class="list-grid">
            <?php
                $args = array(
                    'post_type' => 'alajuela_propiedades'
                );

                $propiedades = new WP_Query($args);

                while($propiedades->have_posts()) {
                    $propiedades->the_post();
            ?>
                <li class="card">
                    <?php the_post_thumbnail(); ?>
                    <div class="content">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </div>
                </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>
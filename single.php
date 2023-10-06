<?php get_header(); ?>

<div class="row w-100">
    <div class="partleft col-lg-4">
        <?php $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        $category = get_the_category(); // Cette fonction récupère les catégories auxquelles appartient l'article en cours
        $args = array(
            'posts_per_page' => 3,
            'category_name' => $category[0]->cat_name,
            'post__not_in' => array(get_the_ID()), // Exclure l'article en cours, sinon 3 articles s'affichent dans la partie gauche ET dans la partie droite
        );
        $wp_query_related = new WP_Query($args);
        ?>

        <section>
            <div class="container">
                <div class="my-5">
                    <h3>Sur le même sujet</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                        <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                    </svg>
                    <?php if ($wp_query_related->have_posts()) : while ($wp_query_related->have_posts()) : $wp_query_related->the_post(); ?>
                            <div>
                                <a href="<?= the_permalink(); ?>">
                                    <img class="imgLeft card-img-top rounded-5" src="<?= get_the_post_thumbnail_url($post) ?>" alt="<?= $thumbnail_alt ?>">
                                </a>
                                <h6 class="py-2 text-primary text-uppercase"><a class="link-offset-2 link-underline" href="<?= the_permalink(); ?>"><?= $post->post_title ?></a></h6>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>
    </div>

    <!-- <div class="row">
    <div class="partleft col-4 ">
        <div class=" container my-5">
            <h3>Sur le même sujet</h3>
            <div class="my-3">
                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top rounded-5" alt=" ">
                <h4>Catégorie 1</h4>
            </div>
            <div class="my-3">
                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top rounded-5" alt=" ">
                <h4>Catégorie 2</h4>
            </div>
            <div class="my-3">
                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top rounded-5" alt=" ">
                <h4>Catégorie 3</h4>
            </div>
        </div>
    </div> -->


    <div class="partright col-lg-8 my-5">
        <div class="container">
            <h1 class="text-center"> <?php the_category(); ?> </h1>
            <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p>Publié le <?php the_date(); ?></p>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
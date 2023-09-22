<?php get_header(); ?>

<h1 class="text-center my-5"> <?php the_category(); ?> </h1>
<?php if (have_posts()) : ?>
    <div class="container-fluid my-5 ">
        <div class="row d-flex justify-content-center ms-5 my-3">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></h5>
                        <img src="<?= the_post_thumbnail_url() ?>" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?= the_excerpt() ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>


<!-- <h1 class="text-center">Catégorie 1</h1>
                    <p class="text-center my-3">Description de la catégorie sur plusieurs ligne Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde culpa saepe fuga! Odio et, mollitia recusandae veniam unde consequatur saepe sed dolorum animi neque cupiditate aperiam tempora reiciendis placeat? Suscipit.</p>

                    <div class="container-fluid my-5">
                        <div class="row row-cols-1 row-cols-md-4 gap-3 d-flex justify-content-center my-3">
                            <div class="card col-4" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card col-4" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card col-4" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-4 gap-3 d-flex justify-content-center my-3">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

<?php get_footer(); ?>
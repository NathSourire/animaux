<?php get_header(); ?>

<main>

<div class="container " >
    <div class="row" >

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="my-5 ">
                <h4><?php the_title(); ?></h4>

                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif; ?>
</div>
</div>
    <!-- <div class="text-center">
            <div class="row my-5">
                <div class="col-6">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top " alt=" ">
                </div>
                <div class="col-6">
                    <h4>blabla 1</h4>
                    <h5>blablalblalbla</h5>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente rerum voluptatibus, maiores sit iusto nulla
                        eligendi repellendus ullam rem repudiandae laborum assumenda, temporibus deleniti reiciendis dignissimos at
                        sequi earum eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi necessitatibus ratione tempore
                        nihil nulla cumque repudiandae nesciunt eius praesentium. Perferendis ipsum quisquam dicta enim corporis
                        inventore ea! Nam, eaque reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus assumenda
                        atque quos ducimus sed illum autem laborum quod reiciendis magnam sit nam delectus reprehenderit in natus,
                        consequuntur quidem nihil eos. </p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="row my-5">
                <div class="col-6">
                    <h4>blabla 1</h4>
                    <h5>blablalblalbla</h5>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente rerum voluptatibus, maiores sit iusto nulla
                        eligendi repellendus ullam rem repudiandae laborum assumenda, temporibus deleniti reiciendis dignissimos at
                        sequi earum eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi necessitatibus ratione tempore
                        nihil nulla cumque repudiandae nesciunt eius praesentium. Perferendis ipsum quisquam dicta enim corporis
                        inventore ea! Nam, eaque reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus assumenda
                        atque quos ducimus sed illum autem laborum quod reiciendis magnam sit nam delectus reprehenderit in natus,
                        consequuntur quidem nihil eos. </p>
                </div>
                <div class="col-6">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top " alt=" ">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="row my-5">
                <div class="col-6">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top " alt=" ">
                </div>
                <div class="col-6">
                    <h4>blabla 1</h4>
                    <h5>blablalblalbla</h5>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente rerum voluptatibus, maiores sit iusto nulla
                        eligendi repellendus ullam rem repudiandae laborum assumenda, temporibus deleniti reiciendis dignissimos at
                        sequi earum eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi necessitatibus ratione tempore
                        nihil nulla cumque repudiandae nesciunt eius praesentium. Perferendis ipsum quisquam dicta enim corporis
                        inventore ea! Nam, eaque reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus assumenda
                        atque quos ducimus sed illum autem laborum quod reiciendis magnam sit nam delectus reprehenderit in natus,
                        consequuntur quidem nihil eos. </p>
                </div>
            </div>
        </div>
        </div> -->



</main>

<?php get_footer(); ?>
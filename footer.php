<footer>

    <div>
        <div class="footerpage"></div>
        <h6 class="text-center">Decouvrez</h6>
        <h5 class="text-center my-3 ">Articles les plus populaires</h5>
        
        <div class="row w-100 p-5">
            <div class="col-4">
                <div class="card h-100">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <img src="<?= get_template_directory_uri() ?> /assets/img/animalsonepage.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div> 

        <div class="row w-100">
            <div class="col-4 text-center listaccess">
                <!-- <div class="" id="list-tab" role="tablist">
                    <h5 class="my-3">Accés rapide</h5>
                    <a class="list-group-item list-group-item-action my-3" id="" data-bs-toggle="list" href="#" role="tab">Accueil</a>
                    <a class="list-group-item list-group-item-action" id="" data-bs-toggle="list" href="#" role="tab">Catégorie 1</a>
                    <a class="list-group-item list-group-item-action" id="" data-bs-toggle="list" href="#" role="tab">Catégorie 2</a>
                    <a class="list-group-item list-group-item-action" id="" data-bs-toggle="list" href="#" role="tab">Catégorie 3</a>
                </div> -->
                <h5 class="my-3">Accés rapide</h5>
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </div>
            <div class="col-4 text-center">
                <div class="" id="list-tab2" role="tablist">
                    <h5 class="my-3">Contactez-nous</h5>
                    <p class=" list-group-item list-group-item-action" id="" data-bs-toggle="list" role="tab">70 rue des Jacobins</p>
                    <p class="list-group-item list-group-item-action" id="" data-bs-toggle="list" role="tab">80000 Amiens</p>
                    <a class="list-group-item list-group-item-action" id="" data-bs-toggle="list" role="tab">contact@blabla.fr</a>
                </div>
            </div>
            <form class="col-4 text-center">
                <div class="my-2">
                    <label for="inputEmail1" class="form-label">Inscrivez-vous à notre newsletters</label>
                    <input type="email" class="" id="inputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
                </div>
            </form>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>
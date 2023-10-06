<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>


    <header>


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Les animaux</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navDropdown">


                <?php $menuItems = wp_get_nav_menu_items('main'); ?>
                    <ul class="navbar-nav fs-5">
                        <?php
                        foreach ($menuItems as $menuItem) { ?>
                            <li class="nav-item ms-5">
                                <a class="nav-link"  href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a>

                            </li>
                        <?php  }
                        ?>
                    </ul>

                    <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://wordpressanimaux.localhost/category/chats/">Catégorie 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://wordpressanimaux.localhost/category/chaveaux/">Catégorie 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://wordpressanimaux.localhost/category/chiens/">Catégorie 3</a>
                        </li>
                    </ul> -->

                </div>
            </div>
        </nav>

        <div class="animalsonepage ">
            <h1 class="text-white">Les amis des bêtes a poils</h1>
        </div>



    </header>
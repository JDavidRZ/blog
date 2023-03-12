<?php

include __DIR__ . "/vendor/autoload.php";

use App\Author;
use App\Category;
use App\Post;

// Primero creo las categorías

// Categoría PHP
$php_category = new Category();
$php_category->setName("PHP");

// Categoría VueJS
$vue_category = new Category();
$vue_category->setName("VueJS");

// Ahora creo al autor
$retaxmaster = new Author();
$retaxmaster->setName("Carlos", "Gómez");

// Ahora creo un post sobre PHP
$php_functions_post = new Post();
$php_functions_post->addTitle("Post para hablar acerca de funciones en PHP");
$php_functions_post->addContent("En este post hablaremos sobre cómo funcionan las funciones en PHP");
$php_functions_post->addCategory($php_category);

// Ahora creo un post sobre VueJS
$vue_app_post = new Post();
$vue_app_post->addTitle("Post sobre cómo crear una app con VueJS");
$vue_app_post->addContent("En este post hablaremos sobre qué necesitamos para crear una app con VueJS");
$vue_app_post->addCategory($vue_category);

// Ahora le asigno los posts al autor
$retaxmaster->createPost($php_functions_post);
$retaxmaster->createPost($vue_app_post);

// Y por último listamos los posts
$author_post = $retaxmaster->getPostst();

foreach ($author_post as $post) {
    
    echo "El usuario {$retaxmaster->getFullName()} tiene el siguiente post: <br><br>";
    echo $post->getPost();
    echo "<br><br><br>";

}
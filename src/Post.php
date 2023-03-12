<?php

namespace App;

class Post 
{

    protected $title;
    protected $content;
    protected $category;

    public function addCategory(Category $category) {
        $this->category = $category;
    }

    public function addTitle(string $title) {
        $this->title = $title;
    }

    public function addContent(string $content) {
        $this->content = $content;
    }

    public function getPost() : string {
        return "<strong>Título:</strong> $this->title <br> <strong>Contenido:</strong> $this->content <br> <strong>Categoría:</strong> {$this->category->getName()}";
    }

}
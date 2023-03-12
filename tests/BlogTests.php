<?php

use PHPUnit\Framework\TestCase;
use App\User;
use App\Author;
use App\Category;
use App\Post;


class PostTest extends TestCase
{
    public function test_add_category_to_post()
    {
        $php_category = new Category();
        $php_category->setName("PHP");
        $php_category->getName();

        $this->assertEquals(1, $php_category->setName("PHP"));
        $this->assertInstanceOf(Category::class, $php_category->getName());
    }
}
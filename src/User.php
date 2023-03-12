<?php

namespace App;

class User
{
    protected $name;
    protected $last_name;

    public function setName(String $name, String $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
    }

    public function getFullName(): string
    {
        return $this->name. "" . $this->last_name;
    }
}
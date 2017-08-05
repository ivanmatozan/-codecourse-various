<?php

namespace App\Model;

class User
{
    protected $attributes;

    public function __set($name, $value)
    {
        $this->$name = $value;
        $this->attributes[$name] = $value;
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function __toString()
    {
        return json_encode($this->toArray());
    }
}
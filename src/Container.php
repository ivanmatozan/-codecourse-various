<?php

namespace App;

class Container implements \ArrayAccess
{
    protected $entries = [];

    public function add($key, callable $item)
    {
        $this->entries[$key] = $item;
    }

    public function has($key)
    {
        return isset($this->entries[$key]);
    }

    public function get($key)
    {
        if (!$this->has($key)) {
            return null;
        }

        $this->entries[$key] = $this->entries[$key]();

        return $this->entries[$key]();
    }

    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        return $this->add($offset, $value);
    }

    public function offsetUnset($offset)
    {
        unset($this->entries[$offset]);
    }
}
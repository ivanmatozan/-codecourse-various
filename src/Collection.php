<?php

namespace App;

class Collection implements \Countable, \IteratorAggregate, \JsonSerializable
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    public function jsonSerialize()
    {
        return array_map(function ($item) {
            return $item;
        }, $this->items);
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }
}

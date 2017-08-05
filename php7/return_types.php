<?php

declare(strict_types = 1);

interface StorageInterface
{
    public function get($key): string;
}

class SessionStorage implements StorageInterface
{
    public function get($key): string
    {
        return 1; // Fatal error because of strict type
    }
}

$s = new SessionStorage();
echo $s->get('key');
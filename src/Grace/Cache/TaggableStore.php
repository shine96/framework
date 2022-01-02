<?php

namespace Grace\Cache;

use Grace\Contracts\Cache\Store;

abstract class TaggableStore implements Store
{
    public function tags()
    {
        return new TaggedCache();
    }
}
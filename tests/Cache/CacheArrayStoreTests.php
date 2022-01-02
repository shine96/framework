<?php

namespace Grace\Tests\Cache;

use Grace\Cache\ArrayStore;
use PHPUnit\Framework\TestCase;
use stdClass;

class CacheArrayStoreTests extends TestCase
{
    public function testItemCanBeSetAndRetrieved()
    {
        $store = new ArrayStore();
        $result = $store->put();
    }
}
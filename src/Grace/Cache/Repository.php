<?php

namespace Grace\Cache;

use ArrayAccess;
use Grace\Contracts\Cache\Store;
use Grace\Contracts\Cache\Repository as CacheContract;

class Repository implements ArrayAccess,CacheContract
{
    /**
     * @var \Grace\Contracts\Cache\Store
     */
    protected $store;

    /**
     * @var
     */
    protected $events;

    /**
     * @var int|null
     */
    protected $default = 3600;

    /**
     * @param \Grace\Contracts\Cache\Store $store
     * @return void
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * @param string $key
     * @return bool
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function has(string $key): bool
    {
        return ! is_null($this->get($key));
    }

    public function get(string $key, mixed $default = null): mixed
    {
        if (is_array($key)) {

        }

        $value = $this->store->get($this->itemKey($key));

        if (is_null($value)) {

        } else {
            $this->event();
        }
        return $value;
    }

    public function put($key, $value, $ttl = null)
    {
        if (is_array($key)) {

        }

        if ($ttl == null) {

        }
    }

    protected function getSeconds($ttl)
    {

    }

    public function increment($key, $value = 1)
    {
        return $this->store->increment($key, $value);
    }

    public function decrement($key, $value = 1)
    {
        return $this->store->decrement($key, $value);
    }

    protected function itemKey($key)
    {
        return $key;
    }


    public function offsetExists(mixed $offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet(mixed $offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset(mixed $offset)
    {
        // TODO: Implement offsetUnset() method.
    }



    public function set(string $key, mixed $value, \DateInterval|int|null $ttl = null): bool
    {
        // TODO: Implement set() method.
    }

    public function delete(string $key): bool
    {
        // TODO: Implement delete() method.
    }

    public function clear(): bool
    {
        // TODO: Implement clear() method.
    }

    public function getMultiple(iterable $keys, mixed $default = null): iterable
    {
        // TODO: Implement getMultiple() method.
    }

    public function setMultiple(iterable $values, \DateInterval|int|null $ttl = null): bool
    {
        // TODO: Implement setMultiple() method.
    }

    public function deleteMultiple(iterable $keys): bool
    {
        // TODO: Implement deleteMultiple() method.
    }



}
<?php

namespace Grace\Contracts\Cache;

use Closure;
use Psr\SimpleCache\CacheInterface;

interface Repository extends CacheInterface
{
    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function pull($key, $default = null);

    /**
     * @param string $key
     * @param mixed $value
     * @param int|null $ttl
     * @return bool
     */
    public function put($key, $value, $ttl = null);

    /**
     * @param string $key
     * @param mixed $value
     * @param int|null $ttl
     * @return bool
     */
    public function add($key, $value, $ttl = null);

    /**
     * @param string $key
     * @param mixed $value
     * @return int|bool
     */
    public function increment($key, $value = 1);

    /**
     * @param string $key
     * @param mixed $value
     * @return int|bool
     */
    public function decrement($key, $value = 1);

    /**
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function forever($key, $value);

    /**
     * @param string $key
     * @param int|null $ttl
     * @param \Closure $callback
     * @return mixed
     */
    public function remember($key, $ttl, Closure $callback);

    /**
     * @param string $key
     * @param \Closure $callback
     * @return mixed
     */
    public function sear($key, Closure $callback);

    /**
     * @param string $key
     * @param \Closure $callback
     * @return mixed
     */
    public function rememberForever($key, Closure $callback);

    /**
     * @param string $key
     * @return bool
     */
    public function forget($key);

    /**
     * @return \Grace\Contracts\Cache\Store
     */
    public function getStore();
}
<?php

namespace Grace\Contracts\Cache;

interface Store
{
    /**
     * @param string|array  $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param array $keys
     * @return array
     */
    public function many(array $keys);

    /**
     * @param string $key
     * @param mixed $value
     * @param int $seconds
     * @return bool
     */
    public function put($key, $value, $seconds);

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
     * Remove an item from the cache.
     *
     * @param string $key
     * @return bool
     */
    public function forget($key);

    /**
     * @return bool
     */
    public function flush();

    /**
     * @return string
     */
    public function getPrefix();


}
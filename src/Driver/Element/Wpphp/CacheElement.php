<?php
declare(strict_types=1);
namespace WordHat\Extension\Driver\Element\Wpphp;

use WordHat\Extension\Driver\Element\BaseElement;

/**
 * WP-API driver element for site cache.
 */
class CacheElement extends BaseElement
{
    /**
     * Clear object cache.
     *
     * @param int   $id   Not used.
     * @param array $args Not used.
     */
    public function update($id, $args = [])
    {
        wp_cache_flush();
    }


    /*
     * Convenience methods.
     */

    /**
     * Alias of update().
     *
     * @see update()
     */
    public function clear()
    {
        $this->update(0);
    }
}

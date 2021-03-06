<?php
/**
 * Per-process memory cache for storing items.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Cache
 */
use Wikimedia\Assert\Assert;

/**
 * Handles per process caching of items
 * @ingroup Cache
 */
class ProcessCacheLRU {
	/** @var Array */
	protected $cache = []; // (key => prop => value)

	/** @var Array */
	protected $cacheTimes = []; // (key => prop => UNIX timestamp)

	protected $maxCacheKeys; // integer; max entries

	/**
	 * @param int $maxKeys Maximum number of entries allowed (min 1).
	 * @throws UnexpectedValueException When $maxCacheKeys is not an int or =< 0.
	 */
	public function __construct( $maxKeys ) {
		$this->resize( $maxKeys );
	}

	/**
	 * Set a property field for a cache entry.
	 * This will prune the cache if it gets too large based on LRU.
	 * If the item is already set, it will be pushed to the top of the cache.
	 *
	 * @param string $key
	 * @param string $prop
	 * @param mixed $value
	 * @return void
	 */
	public function set( $key, $prop, $value ) {
		if ( isset( $this->cache[$key] ) ) {
			$this->ping( $key );
		} elseif ( count( $this->cache ) >= $this->maxCacheKeys ) {
			reset( $this->cache );
			$evictKey = key( $this->cache );
			unset( $this->cache[$evictKey] );
			unset( $this->cacheTimes[$evictKey] );
		}
		$this->cache[$key][$prop] = $value;
		$this->cacheTimes[$key][$prop] = microtime( true );
	}

	/**
	 * Check if a property field exists for a cache entry.
	 *
	 * @param string $key
	 * @param string $prop
	 * @param float $maxAge Ignore items older than this many seconds (since 1.21)
	 * @return bool
	 */
	public function has( $key, $prop, $maxAge = 0.0 ) {
		if ( isset( $this->cache[$key][$prop] ) ) {
			return ( $maxAge <= 0 ||
				( microtime( true ) - $this->cacheTimes[$key][$prop] ) <= $maxAge
			);
		}

		return false;
	}

	/**
	 * Get a property field for a cache entry.
	 * This returns null if the property is not set.
	 * If the item is already set, it will be pushed to the top of the cache.
	 *
	 * @param string $key
	 * @param string $prop
	 * @return mixed
	 */
	public function get( $key, $prop ) {
		if ( !isset( $this->cache[$key][$prop] ) ) {
			return null;
		}
		$this->ping( $key );
		return $this->cache[$key][$prop];
	}

	/**
	 * Clear one or several cache entries, or all cache entries.
	 *
	 * @param string|array $keys
	 * @return void
	 */
	public function clear( $keys = null ) {
		if ( $keys === null ) {
			$this->cache = [];
			$this->cacheTimes = [];
		} else {
			foreach ( (array)$keys as $key ) {
				unset( $this->cache[$key] );
				unset( $this->cacheTimes[$key] );
			}
		}
	}

	/**
	 * Resize the maximum number of cache entries, removing older entries as needed
	 *
	 * @param int $maxKeys
	 * @return void
	 * @throws UnexpectedValueException
	 */
	public function resize( $maxKeys ) {
		Assert::parameterType( 'integer', $maxKeys, '$maxKeys' );
		Assert::parameter( $maxKeys > 0, '$maxKeys', 'must be above zero' );

		$this->maxCacheKeys = $maxKeys;
		while ( count( $this->cache ) > $this->maxCacheKeys ) {
			reset( $this->cache );
			$evictKey = key( $this->cache );
			unset( $this->cache[$evictKey] );
			unset( $this->cacheTimes[$evictKey] );
		}
	}

	/**
	 * Push an entry to the top of the cache
	 *
	 * @param string $key
	 */
	protected function ping( $key ) {
		$item = $this->cache[$key];
		unset( $this->cache[$key] );
		$this->cache[$key] = $item;
	}

	/**
	 * Get cache size
	 * @return int
	 */
	public function getSize() {
		return $this->maxCacheKeys;
	}
}
